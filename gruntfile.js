module.exports = function(grunt) {
    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-openport');
    grunt.loadNpmTasks('grunt-contrib-watch');


    grunt.initConfig({
        // Reference package.json
        pkg : grunt.file.readJSON('package.json'),

        // Compile SCSS with the Compass Compiler
        compass : {
            development : {
                options : {
                    sassDir     : 'styles',
                    cssDir      : 'styles/temp',
                    outputStyle : 'expanded',
                    cacheDir    : 'styles/dist/.sass-cache',
                    sourcemap   : true,
                    environment : 'development'
                },
            },
            production : {
                options : {
                    sassDir     : 'styles',
                    cssDir      : 'styles/temp',
                    outputStyle : 'compressed',
                    cacheDir    : 'styles/dist/.sass-cache',
                    sourcemap   : false,
                    environment : 'production'
                },
            },
        },
 // Run Autoprefixer on compiled css
        autoprefixer: {
            options: {
                browsers: ['last 3 version', '> 1%', 'ie 8', 'ie 9', 'ie 10'],
                map : true
            },
            retrofit : {
                src  : 'styles/temp/retofit.css',
                dest : 'styles/dist/retofit.min.css'
            },
        },
        // Clean temp files
        clean: {
          temp_css: ['styles/temp/'],
        },
        // JSHint - Check Javascript for errors
        jshint : {
            options : {
                globals  : {
                  jQuery : true,
                },
                smarttabs : true,
            },
            all : [ 'Gruntfile.js', 'scripts/**/*.js', '!scripts/dist/*.js', '!scripts/vendors/*.js' ],
        },
        // Combine & minify JS
        uglify : {
            options : {
              sourceMap : true
            },
            retrofit : {
                files : {
                    'scripts/dist/public.min.js' : [ 'scripts/retrofit.js' ]
                }
            }
        },

        // Watch
        watch : {
            options: {
              livereload: true,
            },
            cssPostProcess : {
                files : 'styles/**/*.scss',
                tasks : [ 'compass', 'newer:autoprefixer', 'clean' ]
            },
            jsPostProcess : {
                files : [ 'scripts/**/*.js', '!scripts/dist/*.js' ],
                tasks : [ 'newer:jshint', 'uglify' ],
            },
            livereload : {
                files   : [ 'styles/dist*.css', 'scripts/dist/*.js', '*.html', 'images/*', '*.php' ],
            },
        },
    });
    grunt.registerTask('default', ['openport:watch.options.livereload:35729', 'watch']);
};