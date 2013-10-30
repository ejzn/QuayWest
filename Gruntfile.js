module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      dev: {
        files: {
          "wp-content/themes/Sterling/library/css/style.css": "wp-content/themes/Sterling/library/less/style.less",
          "wp-content/themes/Sterling/library/css/login.css": "wp-content/themes/Sterling/library/less/login.less",
          "wp-content/themes/Sterling/library/css/ie.css": "wp-content/themes/Sterling/library/less/ie.less"
        }
      },
      prod: {
        options: {
          yuicompress: true
        },
        files: {
          "wp-content/themes/Sterling/library/css/style.css": "wp-content/themes/Sterling/library/less/style.less",
          "wp-content/themes/Sterling/library/css/login.css": "wp-content/themes/Sterling/library/less/login.less",
          "wp-content/themes/Sterling/library/css/ie.css": "wp-content/themes/Sterling/library/less/ie.less"
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.registerTask('default', ['less']);

};

