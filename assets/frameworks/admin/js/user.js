function show_user_profile(id) {
	$.ajax({
		type: "post",
		url: base_url + "admin/user/get_profile",
		data: { user_id: id },
		dataType: "json",
		success: function (response) {
            
        },
	});
}
