module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "dist/css/main.css": "src/less/less.less" // destination file and source file
        }
      }
    },
   /* uglify: {
    my_target: {
      files: {
        'dist/js/main.min.js': ['src/js/jquery.min.js', 'src/js/bootstrap.min.js', 'src/js/jquery.validate.js', 'src/js/jquery.owl-carousel.js', 'src/js/custom.js', 'src/js/parsley.js', 'src/js/nav.js']
      }
    }
  } */
  });

  grunt.registerTask('default', ['less', 'uglify']);
};