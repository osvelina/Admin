<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
:root {
	--vs-primary: 29 92 255;
}


/*Dialog Styles*/
dialog {
	padding: 1rem 3rem;
	background: white;
	max-width: 800px;
    height: 500px;
	padding-top: 2rem;
	border-radius: 20px;
	border: 0;
	box-shadow: 0 5px 30px 0 rgb(0 0 0 / 10%);
	animation: fadeIn 1s ease both;
	&::backdrop {
		animation: fadeIn 1s ease both;
		background: rgb(255 255 255 / 40%);
		z-index: 2;
		backdrop-filter: blur(20px);
	}
	.x {
		filter: grayscale(1);
		border: none;
		background: none;
		position: absolute;
		top: 15px;
		right: 10px;
		transition: ease filter, transform 0.3s;
		cursor: pointer;
		transform-origin: center;
		&:hover {
			filter: grayscale(0);
			transform: scale(1.1);
		}
	}
    h2 {
    font-weight: 600;
    font-size: 2rem;
    padding-bottom: 1rem;
    text-align: center; /* Mengatur teks di tengah secara horizontal */
    display: flex;
    justify-content: center;
    align-items: center; /* Mengatur elemen di tengah secara vertikal */
    margin: 0; /* Menghilangkan margin bawaan agar tidak memengaruhi posisi tengah */
}

	p {
		font-size: 1rem;
		line-height: 1.3rem;
		padding: 0.5rem 0;
		a {
			&:visited {
				color: rgb(var(--vs-primary));
			}
		}
	}
}

/*General Styles*/
body {
	font-family: Poppins, sans-serif;
	background-size: cover; 
    height: 100vh;
        overflow-y: auto; 
        
}
button.primary {
	display: inline-block;
	font-size: 0.8rem;
	color: #fff !important;
	background: rgb(var(--vs-primary) / 100%);
	padding: 13px 25px;
	border-radius: 17px;
	transition: background-color 0.1s ease;
	box-sizing: border-box;
	transition: all 0.25s ease;
	border: 0;
	cursor: pointer;
	box-shadow: 0 10px 20px -10px rgb(var(--vs-primary) / 50%);
	&:hover {
		box-shadow: 0 20px 20px -10px rgb(var(--vs-primary) / 50%);
		transform: translateY(-5px);
	}
}

@keyframes fadeIn {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
}




.upload-input, .upload-textarea {
 margin-bottom: 20px;
}

.upload-file {
 display: none;
}

.upload-button {
    background-color: rgb(49, 36, 80);
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: block; /* Mengubah display menjadi block agar dapat mengatur margin secara horizontal */
    margin: 0 auto; /* Memberikan margin secara horizontal secara otomatis (auto) untuk memposisikan di tengah */
    font-size: 16px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
}


.upload-title {
 font-size: 15px;
 

}
.upload-deskripsi {
    font-size: 15px;
    
}

.upload-input {
 margin-bottom: 20px;
}


</style>
<body>
    <dialog id="dialog">
        <h2>Tambah Voucher</h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="upload-title">Judul</h3>
                    <input type="text" name="title" placeholder="Judul" class="upload-input">
                </div>
                <div class="col">
                    <h3 class="upload-title">Potongan Harga</h3>
                    <div class="grid-container">
                        <input type="text" name="Rupiah" placeholder="Rp" class="upload-input">
                        <input type="text" name="Persen" placeholder="%" class="upload-input">
                    </div>
                </div>
        </div>
        <h3 class="upload-deskripsi">Deskripsi</h3>
        <textarea name="description" placeholder="Deskripsi" class="upload-textarea"></textarea>
        <div class="upload-container">
        <h3 class="upload-title">Upload Gambar</h3>
        <form action="/upload" method="post" enctype="multipart/form-data">
        <input type="file" name="image" class="upload-input">
        <button type="submit" class="upload-button">Upload</button>
        </form>
</div>
        <button onclick="window.dialog.close();" aria-label="close" class="x">❌</button>
    </dialog>  
</body>
