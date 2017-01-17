module.exports = function(grunt) {
    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-openport');
    grunt.loadNpmTasks('grunt-contrib-watch');


    grunt.initConfig({
        // Reference package.json
        pkg : grunt.file.readJSON('package.json'),
        // Compile css
        less: {
            options: {
              compress: true,
              sourceMap: true,
            },
            retrofit: {
                files: { 'styles/temp/retrofit.css': 'styles/retrofit.less' }
            },
        },
 		// Run Autoprefixer on compiled css
        autoprefixer: {
            options: {
                browsers: ['last 3 version', '> 1%', 'ie 8', 'ie 9', 'ie 10'],
                map : true
            },
            retrofit : {
                src  : 'styles/temp/retrofit.css',
                dest : 'styles/dist/retrofit.css'
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
                files : 'styles/**/*.less',
                tasks : [ 'less', 'newer:autoprefixer', 'clean' ]
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