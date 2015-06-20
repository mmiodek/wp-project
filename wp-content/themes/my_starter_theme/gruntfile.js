module.exports = function(grunt) {

grunt.initConfig({
  watch: {
    sass: {
      files: ['scss/*.scss'],
      tasks: ['autoprefixer','sass']
    }

  }, //End of watch config

  sass: {                              // Task
    dist: {                            // Target
      options: {                       // Target options
        style: 'expanded'
      },
      files: {                         // Dictionary of files
      'style.css': 'scss/final.scss' 
      }
    }
  }, //End of sass config

  autoprefixer: {

    options: {
      browsers: ['> 1%', 'last 2 versions', 'Firefox ESR', 'Opera 12.1']
    },

    files: {
      src: 'style.css'
    }
    
  } //End of outoprefixer


});

grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-autoprefixer');

grunt.registerTask('default', ['watch']);

};