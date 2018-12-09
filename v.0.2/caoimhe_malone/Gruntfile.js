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
          "css/main.css": ["src/less/custom.less" , "css/nav.css"]// destination file and source file
        }
      }
    },
    uglify: {
    my_target: {
      files: {
        'js/main.min.js': ["js/index.js", "js/fastclick.js", "js/fixed-responsive-nav.js","js/responsive-nav.js", "js/scroll.js",]
      }
    }
  } 
  });

  grunt.registerTask('default', ['less', 'uglify']);
};