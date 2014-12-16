module.exports = {
	main: {
		cwd: 'source',
		src: ['index.html'],
		dest: '<%= settings.dir_build %>',
		expand: true
	},
	media: {
		cwd: 'source/media',
		src: ['*'],
		dest: '<%= settings.dir_build %>/assets/media',
		expand: true
	}
}