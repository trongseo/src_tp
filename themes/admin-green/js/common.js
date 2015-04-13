var the_form = window.document.frm;		
function submit_list(flag, mode) {
	if (selected_item()){
		the_form.factive.value = flag;
        the_form.action = mode;
        the_form.submit();
	}
}
function selected_item(){
	var name_count = the_form.length;

	for (i=0; i<name_count; i++){
		if (the_form.elements[i].checked){
			return true;
		}
	}
	alert("Vui lòng chọn bài viết");
    return false;
}
function delete_list(the_url) {
	if (selected_item()){
		question = confirm("Bạn có chắc chắn xóa?");
		if (question != "0"){
			the_form.action = the_url;
			the_form.submit();
		}
	}
}
function select_switch(status) {
	for (i = 0; i < document.frm.length; i++) {
		document.frm.elements[i].checked = status;
	}
}