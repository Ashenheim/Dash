module.exports = {
	
	dev: {
		src: [
			'<%= settings.dir_js_src %>/vendors/jquery-1.11.1.js',
			// '<%= settings.dir_js_src %>/vendors/modernizr.js',
			'<%= settings.dir_js_src %>/partials/**/*.js',
			'<%= settings.dir_js_src %>/*.js'
		],
		dest: '<%= settings.dir_build %><%= settings.dir_js_dist %>/global.min.js'
	},
	options: {
		banner: '/*! <%= settings.dir_sass %> */\n'
	}
	
};