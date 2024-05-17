import './bootstrap';

document.body.onmousemove = e => {
    for(const date of document.getElementsByClassName("box")) {
      const rect = date.getBoundingClientRect(),
            x = e.clientX - rect.left,
            y = e.clientY - rect.top;

      date.style.setProperty("--mouse-x", `${x}px`);
      date.style.setProperty("--mouse-y", `${y}px`);
    };
};

function confirmDeletion(appointmentId) {
  Swal.fire({
      title: 'Are you sure you want to delete?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
      if (result.isConfirmed) {

      }
  });
};
