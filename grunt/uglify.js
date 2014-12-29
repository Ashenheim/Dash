module.exports = {
	
	options: {
		mangle: false,
		compress: {
			drop_console: true
		}
	},
	target: {
		files: {
			'<%= settings.dir_build %><%= settings.dir_js_dist %>/global.min.js' : ['<%= settings.dir_build %><%= settings.dir_js_dist %>/global.min.js']
		}
	}

}