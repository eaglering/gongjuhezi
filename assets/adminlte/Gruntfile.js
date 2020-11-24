var path = require('path');
var rootPath = path.dirname(path.dirname(__dirname));
var distPath = rootPath + '/public/static/backend';

function gen (files) {
    var data = {};
    for (var file in files) {
      if (files.hasOwnProperty(file)) {
        data[distPath + '/' + file] = files[file];
      }
    }
    return data;
}
// AdminLTE Gruntfile
module.exports = function (grunt) { // jshint ignore:line
  'use strict';

  grunt.initConfig({
    pkg   : grunt.file.readJSON('package.json'),
    watch : {
      less : {
        // Compiles less files upon saving
        files: ['build/less/*.less'],
        tasks: ['less:production', 'notify:less']
      },
      js   : {
        // Compile js files upon saving
        files: ['build/js/*.js'],
        tasks: ['js', 'notify:js']
      },
      skins: {
        // Compile any skin less files upon saving
        files: ['build/less/skins/*.less'],
        tasks: ['less:minifiedSkins', 'notify:less']
      }
    },
    // Notify end of tasks
    notify: {
      less: {
        options: {
          title  : 'AdminLTE',
          message: 'LESS finished running'
        }
      },
      js  : {
        options: {
          title  : 'AdminLTE',
          message: 'JS bundler finished running'
        }
      }
    },
    // 'less'-task configuration
    // This task will compile all less files upon saving to create both AdminLTE.css and AdminLTE.min.css
    less  : {
      // Production compressed version
      production   : {
        options: {
          compress: true
        },
        files  : gen({
          // compilation.css  :  source.less
          'css/adminlte.min.css'                     : [
            'node_modules/toastr/build/toastr.min.css',
            'node_modules/nprogress/nprogress.css',
            'node_modules/bootstrap-daterangepicker/daterangepicker.css',
            'node_modules/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css',
            'bower_components/select2/dist/css/select2.css',
            'build/less/AdminLTE.less'
          ]
        })
      },
      // Skins minified
      minifiedSkins: {
        options: {
          compress: true
        },
        files  : gen({
          'css/skin-black.min.css'       : 'build/less/skins/skin-black.less'
        })
      }
    },

    // Uglify task info. Compress the js files.
    uglify: {
      options   : {
        mangle : true,
        output: {
          comments: 'some'
        }
      },
      production: {
        files: gen({
          'js/adminlte.min.js': [
            'dist/js/adminlte.js'
          ]
        })
      }
    },

    // Concatenate JS Files
    concat: {
      options: {
        separator: '\n\n',
        banner   : '/*! AdminLTE app.js\n'
        + '* ================\n'
        + '* Main JS application file for AdminLTE v2. This file\n'
        + '* should be included in all pages. It controls some layout\n'
        + '* options and implements exclusive AdminLTE plugins.\n'
        + '*\n'
        + '* @author Colorlib\n'
        + '* @support <https://github.com/ColorlibHQ/AdminLTE/issues>\n'
        + '* @version <%= pkg.version %>\n'
        + '* @repository <%= pkg.repository.url %>\n'
        + '* @license MIT <http://opensource.org/licenses/MIT>\n'
        + '*/\n\n'
        + '// Make sure jQuery has been loaded\n'
        + 'if (typeof jQuery === \'undefined\') {\n'
        + 'throw new Error(\'AdminLTE requires jQuery\')\n'
        + '}\n\n'
      },
      dist   : {
        src : [
          'node_modules/toastr/build/toastr.min.js',
          'node_modules/jquery-pjax/jquery.pjax.js',
          'node_modules/nprogress/nprogress.js',
          'bower_components/moment/moment.js',
          'node_modules/bootstrap-validator/dist/validator.min.js',
          'node_modules/bootstrap-daterangepicker/daterangepicker.js',
          'node_modules/bootstrap-switch/dist/js/bootstrap-switch.js',
          'bower_components/select2/dist/js/select2.js',
          'bower_components/select2/dist/js/i18n/zh-CN.js',
          'build/js/BoxRefresh.js',
          'build/js/BoxWidget.js',
          'build/js/ControlSidebar.js',
          'build/js/DirectChat.js',
          'build/js/PushMenu.js',
          'build/js/TodoList.js',
          'build/js/Tree.js',
          'build/js/Layout.js',
          'build/js/ExpandTree.js'
        ],
        dest: 'dist/js/adminlte.js'
      }
    },

    // Optimize images
    image: {
      dynamic: {
        files: [
          {
            expand: true,
            cwd   : 'build/img/',
            src   : ['**/*.{png,jpg,gif,svg,jpeg}', 'node_modules/x-editable/dist/bootstrap3-editable/img/*.{png,jpg,gif,svg,jpeg}'],
            dest  : 'dist/img/'
          }
        ]
      }
    },

    // Validate JS code
    jshint: {
      options: {
        jshintrc: 'build/js/.jshintrc'
      },
      grunt  : {
        options: {
          jshintrc: 'build/grunt/.jshintrc'
        },
        src    : 'Gruntfile.js'
      },
      core   : {
        src: 'build/js/*.js'
      },
      demo   : {
        src: 'dist/js/demo.js'
      },
      pages  : {
        src: 'dist/js/pages/*.js'
      }
    },

    jscs: {
      options: {
        config: 'build/js/.jscsrc'
      },
      core   : {
        src: '<%= jshint.core.src %>'
      },
      pages  : {
        src: '<%= jshint.pages.src %>'
      }
    },

    // Validate CSS files
    csslint: {
      options: {
        csslintrc: 'build/less/.csslintrc'
      },
      dist   : [
        'dist/css/AdminLTE.css'
      ]
    },

    // Validate Bootstrap HTML
    bootlint: {
      options: {
        relaxerror: ['W005']
      },
      files  : ['pages/**/*.html', '*.html']
    },

    // Delete images in build directory
    // After compressing the images in the build/img dir, there is no need
    // for them
    clean: {
      build: ['build/img/*']
    }
  });

  // Load all grunt tasks

  // LESS Compiler
  grunt.loadNpmTasks('grunt-contrib-less');
  // Watch File Changes
  grunt.loadNpmTasks('grunt-contrib-watch');
  // Compress JS Files
  grunt.loadNpmTasks('grunt-contrib-uglify');
  // Include Files Within HTML
  grunt.loadNpmTasks('grunt-includes');
  // Optimize images
  grunt.loadNpmTasks('grunt-image');
  // Validate JS code
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-jscs');
  // Delete not needed files
  grunt.loadNpmTasks('grunt-contrib-clean');
  // Lint CSS
  grunt.loadNpmTasks('grunt-contrib-csslint');
  // Lint Bootstrap
  grunt.loadNpmTasks('grunt-bootlint');
  // Concatenate JS files
  grunt.loadNpmTasks('grunt-contrib-concat');
  // Notify
  grunt.loadNpmTasks('grunt-notify');

  // Linting task
  grunt.registerTask('lint', ['jshint', 'csslint', 'bootlint']);
  // JS task
  grunt.registerTask('js', ['concat', 'uglify']);
  // CSS Task
  grunt.registerTask('css', ['less:production', 'less:minifiedSkins']);

  // The default task (running 'grunt' in console) is 'watch'
  grunt.registerTask('default', ['watch']);
};
