module.exports = {
	dev: {
		options: {
			style: 'expanded',
			trace: true
		},
		files: {
			'<%= settings.dir_build %><%= settings.dir_css %>/global.css': '<%= settings.dir_sass %>/global.sass'
		}
	},
	dist: {
		options: {
			style: 'compressed',
			sourcemap: 'none',
			banner: "/*!\n * <%= settings.name %>\n * version: <%= settings.version %>\n */"
		},
		files: {
			'<%= settings.dir_build %><%= settings.dir_css %>/global.css': '<%= settings.dir_sass %>/global.sass'
		}
	}
};