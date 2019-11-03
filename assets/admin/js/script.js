function delProduct(id) {
    Swal.fire({
        title: 'Tem certeza?',
        text: "Se você confimar, o produto será deletado!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if(result.value) {
            $.ajax({
                type: "POST",
                url: "http://127.0.1.1/admin/produto/deletar/" + id,
                success: function (res) {
                    if (res != "") {
                        Swal.fire(
                            'Deletado!',
                            `Produto de id ${id} deletado com sucesso!`,
                            'success'
                        )
                    }
                }
            });
        }
    })
}

function delMarca(id) {
    Swal.fire({
        title: 'Tem certeza?',
        text: "Se você confimar, a marca será deletada!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if(result.value) {
            $.ajax({
                type: "POST",
                url: "http://127.0.1.1/admin/marca/deletar/" + id,
                success: function (res) {
                    if (res != "") {
                        Swal.fire(
                            'Deletado!',
                            `Marca de id ${id} deletado com sucesso!`,
                            'success'
                        )
                    }
                }
            });
        }
    })
}

function delCategoria(id) {
    Swal.fire({
        title: 'Tem certeza?',
        text: "Se você confimar, a categoria será deletada!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if(result.value) {
            $.ajax({
                type: "POST",
                url: "http://127.0.1.1/admin/categoria/deletar/" + id,
                success: function (res) {
                    if (res != "") {
                        Swal.fire(
                            'Deletado!',
                            `Categoria de id ${id} deletado com sucesso!`,
                            'success'
                        )
                    }
                }
            });
        }
    })
}

function delBanner(id) {
    Swal.fire({
        title: 'Tem certeza?',
        text: "Se você confimar, o banner será deletada!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if(result.value) {
            $.ajax({
                type: "POST",
                url: "http://127.0.1.1/admin/categoria/deletar/" + id,
                success: function (res) {
                    if (res != "") {
                        Swal.fire(
                            'Deletado!',
                            `Banner de id ${id} deletado com sucesso!`,
                            'success'
                        )
                    }
                }
            });
        }
    })
}

function SetBanner(id) {
    Swal.fire({
        title: 'Tem certeza?',
        text: "Se você confimar, o banner será setado como visível!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if(result.value) {
            $.ajax({
                type: "POST",
                url: "http://127.0.1.1/admin/categoria/deletar/" + id,
                success: function (res) {
                    if (res != "") {
                        Swal.fire(
                            'Sucesso!',
                            `Banner de id ${id} setado como principal!`,
                            'success'
                        )
                    }
                }
            });
        }
    })
}