//Preview Uploaded Image
function prevImage(id) {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById(id).files[0]);
    oFReader.onload = function (oFREvent) {
        document.querySelector(`.${id}`).src = oFREvent.target.result;
    };
};
//Show Delete Confirmation
function deleteData(id) {
    event.preventDefault();
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    })
}

//Change Featured Status

function changeFeatured(id,route) {
    console.log(route)
}
