// Initialize DataTable
$(document).ready(function() {
    $('#project-details table').DataTable();

    // Handle form submission
    $('#project-form').on('submit', function(e) {
        e.preventDefault();
        
        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                // Show success message
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Data project berhasil disimpan',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Reload the page
                        window.location.reload();
                    }
                });
            },
            error: function(xhr) {
                // Show error message
                let errorMessage = 'Terjadi kesalahan saat menyimpan data';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }
                
                Swal.fire({
                    title: 'Error!',
                    text: errorMessage,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    });

    // Handle delete button
    $('form[action*="projects"]').on('submit', function(e) {
        e.preventDefault();
        
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                const form = $(this);
                
                $.ajax({
                    url: form.attr('action'),
                    method: 'POST',
                    data: form.serialize(),
                    success: function(response) {
                        Swal.fire(
                            'Terhapus!',
                            'Data project berhasil dihapus.',
                            'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        });
                    },
                    error: function(xhr) {
                        let errorMessage = 'Terjadi kesalahan saat menghapus data';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        
                        Swal.fire(
                            'Error!',
                            errorMessage,
                            'error'
                        );
                    }
                });
            }
        });
    });

    // Handle edit button
    $('[data-project-id]').click(function() {
        const projectId = $(this).data('project-id');
        
        // Show loading state
        Swal.fire({
            title: 'Loading...',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        // Fetch project data
        $.get(`/projects/${projectId}/edit`, function(data) {
            Swal.close();
            
            // Populate form with project data
            for (const key in data) {
                $(`#${key}`).val(data[key]);
            }
            
            // Update form action and method for edit
            $('#project-form').attr('action', `/projects/${projectId}`);
            $('#project-form').append('<input type="hidden" name="_method" value="PUT">');
            
            // Update modal title
            $('#modal-title').text('Edit Project');
        }).fail(function(xhr) {
            Swal.fire({
                title: 'Error!',
                text: 'Gagal mengambil data project',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
    });
});

// Function to show success message (can be called from blade)
function showSuccessMessage(message) {
    Swal.fire({
        title: 'Berhasil!',
        text: message,
        icon: 'success',
        confirmButtonText: 'OK'
    });
}

// Function to show error message (can be called from blade)
function showErrorMessage(message) {
    Swal.fire({
        title: 'Error!',
        text: message,
        icon: 'error',
        confirmButtonText: 'OK'
    });
}

