
// Définition des dépendances dont on a besoin pour executer les taches
var
gulp = require( 'gulp' ),
tiny = require( 'gulp-tinypng-nokey'),
newer = require( 'gulp-newer' ),
size = require ( 'gulp-size' ),
svgmin = require('gulp-svgmin'),
del = require ( 'del' ),
cleanDest = require ( 'gulp-dest-clean'),
imacss = require ( 'gulp-imacss' ),
sass = require ( 'gulp-sass' ),
htmlPreprocess = require ( 'gulp-preprocess' ),
htmlclean = require ( 'gulp-htmlclean' ),
browserSync = require ( 'browser-sync' ),
pkg = require ('./package.json'),
pug = require ( 'gulp-pug' ); // comme ca on a le scope de l'object package.json du coup on peut recuperer le nom de l'auteur par exemple.


// Définition de quelques variables générales
var
devBuild = ( (process.env.NODE_ENV || 'development').trim().toLowerCase() !== 'production'),
sourcePug = 'views/',
source ="source/",
dest = 'build/';


// Définition de quelques variables liées à nos taches ( options de taches)
var
imagesOpts = {
  in: source + 'images/*',
  out: dest + 'images/',
  watch: source + 'images/*.*'
},
svgOpts = {
      in: source + 'images/svg/*',
      out: dest + 'images/svg/',
      watch: source + 'images/svg/*.*'
  }
imageUriOpts = {
  in: source + 'images/inline/*.*',
  out: source + 'scss/images/',
  filename: '_datauri.scss',
  namespace:'uri'
},
css = {
  in: source + 'scss/main.scss',
  watch: [source + 'scss/**/*'],
  out: dest + 'css/',
  sassOpts: {
    outputStyle: 'expended',
    precision: 3,
    errLogToConsole:true
  }
},
html = {
  in: sourcePug + '*.pug',
  watch: [sourcePug + '*.pug', sourcePug + 'template/**/*'],
  out: dest,
  context: {
    devBuild: devBuild,
    author: pkg.author,
    version: pkg.version
  }
},
syncOpts = {
  server:{
    baseDir: dest,
    index:'index.html'
  },
  open:true,
  notify:true
};


gulp.task('clean', function(){
  del( [dest + '*'] );
});


// Définition des taches
gulp.task('images', function(){
  return gulp.src( imagesOpts.in )
  //.pipe(cleanDest( imagesOpts.out)) //pour supprimer les images dans build si on les supprime dans sources.
  .pipe(newer( imagesOpts.out ) )
  .pipe(size({title: 'Images size before compression:', showFiles: true}))
  .pipe( tiny() )
  .pipe(size({title: 'Images size after compression:', showFiles: true}))
  .pipe( gulp.dest( imagesOpts.out ) )
  // fonction dans laquelle on mets la commande qu'on veut executé
});

gulp.task('svgmin', function () {
    return gulp.src(svgOpts.in)
        .pipe(cleanDest(svgOpts.out))
        .pipe(newer(svgOpts.out))
        .pipe(size({title: 'SVG size before compression:', showFiles: true}))
        .pipe(svgmin({
            plugins: [{
                removeTitle: true
            },
            {
                removeDesc: true
            },
            {
                removeViewBox: false
            }]
        }))
        .pipe(size({title: 'SVG size after compression: ', showFiles: true}))
        .pipe(gulp.dest('./build/images/svg/'));
});

gulp.task('imageuri', function(){

  return gulp.src(imageUriOpts.in)
  .pipe(tiny())
  .pipe(imacss(imageUriOpts.filename, imageUriOpts.namespace))
  .pipe(gulp.dest(imageUriOpts.out));

});

gulp.task('sass', function(){

  return gulp.src(css.in)
  .pipe(sass(css.sassOpts))
  .pipe(gulp.dest(css.out))
  .pipe(browserSync.reload({stream: true}));
});

gulp.task('html', function(){

  var page =  gulp.src(html.in)
  .pipe(pug({pretty: true}))
  .pipe(htmlPreprocess({context:html.context}));
  if(!devBuild){
    page = page
    .pipe(size({title:'HTML avant nettoyage:'}))
    .pipe(htmlclean())
    .pipe(size({title:'HTML après nettoyage:'}))
  }
  return page.pipe(gulp.dest(html.out));
});


gulp.task('browserSync', function(){
  browserSync(syncOpts);
});


// Tache par défault exécuté lorsqu'on tape gulp dans le terminal
gulp.task('default',['html','images','sass','browserSync','svgmin'], function(){

  gulp.watch(html.watch, ['html',browserSync.reload]);
  gulp.watch(imagesOpts.watch, ['images']);
  gulp.watch(css.watch, ['sass']);

});
