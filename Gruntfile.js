module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            css: {
                src: [
                    'css/*'
                ],
                dest: 'combined.css'
            },
            js: {
		expand: true,
                src: [
                    'js/*'
                ],
                dest: 'combined.js'
            }
        },
        cssmin: {
            css: {
                src: 'combined.css',
                dest: 'combined.min.css'
            }
        },
        uglify: {
            js: {
                files: {
                    'combined.min.js' : ['combined.js/js/*.js'], // Actual pattern(s) to match.
          	    dest: 'combined',   // Destination path prefix.
          	    ext: '.min.js'    // Dest filepaths will have this extension.']
                }
            }
        },
    });
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.registerTask('default', ['concat:css', 'cssmin:css', 'concat:js', 'uglify:js']);
};
