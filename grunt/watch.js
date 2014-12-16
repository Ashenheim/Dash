module.exports = {
	
	site: {
		files: [ '*.php', '**/*.php' ]
	},
	sass: {
		files: [ '<%= settings.dir_sass %>/**/*.sass',
		         '<%= settings.dir_sass %>/**/*.scss' ],
		tasks: [ 'sass:dev', 'autoprefixer' ]
	},
	scripts: {
		files: [ '<%= settings.dir_js_src %>/scripts.js',
		         '<%= settings.dir_js_src %>/**/*.js' ],
		tasks: [ 'jshint', 'concat' ]
	},
	media: {
		files: ['<%= settings.dir_src %>/media/**/*' ],
		tasks: [ 'copy:media' ]
	},
	options: {
		livereload: 9090
	}
	
};