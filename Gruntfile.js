module.exports = function (grunt) {

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');


    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'css/styles.css': 'scss/cutestrap.scss'
                }
            }
        },

        cssmin: {
          options: {
            // shorthandCompacting: false,
            roundingPrecision: -1
          },
          target: {
            files: {
              'css/style.css': ['css/style-tomin.css']
            }
          }
        },



        watch: {

            css: {
                files: ['scss/*', 'scss/components/*', 'scss/support/*', 'scss/variables/*', 'css/*', '*', '!css/styles.css', '!css/styles.css.map'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                }
            },
            livereload: {
              // Here we watch the files the sass task will compile to
              // These files are sent to the live reload server after sass compiles to them
              options: { livereload: true },
              files: ['css/*', 'scss/*', '*'],
            }
        },

        postcss: {
          options: {
            map: true, // inline sourcemaps
            processors: [

              require('autoprefixer')({browsers: 'last 2 versions'}) // add vendor prefixes

            ]
          },
          dist: {
            src: 'css/style.css'
          }
        }


    });

    grunt.registerTask('build', ['sass', 'concat:css', 'cssmin', 'postcss']);
    grunt.registerTask('default', ['watch']);

};
