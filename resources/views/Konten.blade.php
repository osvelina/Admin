@extends('Layouts.main')

@section('title', 'Konten')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
.button {
    margin-top: 1.25rem; /* 20px */
    width: 100%;
    display: flex;
    justify-content: center;
    background-color: #3490dc;
    color: #ffffff;
    padding: 1rem 2rem;
    border-radius: 9999px; /* Nilai besar untuk membuatnya sepenuhnya bulat */
    font-weight: 600;
    text-align: center;
    border: none;
    outline: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #2779bd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.label-input {
    display: block;
    margin-bottom: 0.5rem;
    font-size: 0.875rem; /* 14px */
    font-weight: 600;
    color: #4b5563; /* Text color gray-500 */
}

.input-field {
    width: 50%;
    padding: 0.5rem;
    border: 2px solid #767272; /* Border color gray-300 */
    border-radius: 0.450rem; /* Border radius 6px */
    outline: none;
    transition: border-color 0.3s ease; /* Transition on focus */
}

.input-field:focus {
    border-color: #667eea; /* Border color indigo-500 on focus */
}
.upload-deskripsi {
    font-size: 15px;
    
}
.upload-textarea {
 margin-bottom: 20px;
}
input[type="text"], textarea {
	width: 50%;
	padding: 0,5rem;
	border: 2px solid #767272;
	border-radius: 6px;
	box-sizing: border-box;
}


</style>
    
@section('content')
<div class="section-title">
    {{-- <h2>Konten Terkini</h2> --}}
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
		<div class="text-center">
			<h2 class="mt-3 text-2xl font-bold text-gray-900">
				File Upload
			</h2>
		</div>
        <form class="mt-25 space-y-3" action="#" method="POST">
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="label-input">Judul</label>
                        <input class="input-field" type="teks" placeholder="Judul">
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                    <h3 class="upload-deskripsi">Deskripsi</h3>
                    <textarea name="description" placeholder="Deskripsi" class="upload-textarea"></textarea>
                </div>
                    <div class="grid grid-cols-1 space-y-2">
                                    <label class="text-sm font-bold text-gray-500 tracking-wide">Attach Document</label>
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                                <div class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
                                    <div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">
                                    <img class="has-mask h-36  object-center" src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg" alt="freepik image">
                                    </div>
                                    <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span> files here <br /> or <a href="" id="" class="text-blue-600 hover:underline">select a file</a> from your computer</p>
                                </div>
                                <input type="file" class="hidden">
                            </label>
                        </div>
                    </div>
                            <p class="text-sm text-gray-300">
                                <span>File type: Video, doc,pdf,types of images</span>
                            </p>
                        </div>
                    <div>
                        <button type="submit" class="button">
                            Upload
                        </button>
                    </div>
        </form>
	</div>
</div>

    </div>@endsection


