$(document).ready(function () {
	let contact_table = new DataTable("#contact_us_table");
	let project_list_table = new DataTable("#project_list_table");
});

$(document).on("click", ".delete_blog", function () {
	let question = confirm("Do you want to delete project");
	if (question) {
		$(this).closest("tr").remove();
		let delete_id = $(this).attr("delete_id");
		$.ajax({
			type: "post",
			url: base_url + "admin/blogs/delete_blog",
			data: {
				delete_id: delete_id,
			},
			dataType: "json",
			success: function (response) {
				if (response.status) {
					alert(response.message);
				} else {
					alert(response.message);
				}
			},
		});
	}
});
