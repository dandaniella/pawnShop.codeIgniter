const apiURL = "http://localhost:3600/api/v1/";
const baseURL = "http://localhost/pawnshop1/";

const notification = (type, title, message) => {
	return toastr[type](message, title);
};

const token = localStorage.getItem("TOKEN");
