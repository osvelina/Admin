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
	width: 90%;
	padding: 0,5rem;
	border: 2px solid #767272;
	border-radius: 6px;
	box-sizing: border-box;
}
.upload-textarea {
    height: 55%;
}
/* terkini */
.section-title {
    margin-bottom: 1.5rem;
  }

  .text-xl {
    font-size: 1.25rem;
  }

  .font-semibold {
    font-weight: 600;
  }
  .bg-white.card {
      background-color: #ffffff; /* Atur warna latar belakang card */
    }
  

  .rounded-lg {
    border-radius: 0.375rem;
    margin: 20px 20px 20px 20px;
  }

  .border {
    border-width: 1px;
  }

  .text-card-foreground {
    color: #000000;
  }

  .shadow-sm {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1);
  }

  .bg-white.card {
    background-color: #ffffff;
  }

  .p-4 {
    padding: 1rem;
  }

  .justify-between {
    justify-content: space-between;
  }

  .text-lg {
    font-size: 1.125rem;
    margin-bottom: 0.5rem;
    white-space: nowrap;
    width: 208px;
  }

  .text-sm {
    font-size: 0.875rem;
  }

  .text-gray-600 {
    color: #718096;
  }

  .max-lines-2 {
    display: -webkit-box;
    -webkit-box-orient: horizontal;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 6;
    max-height: 6 * 3rem;
  }



  .hover\:bg-muted:hover {
    background-color: #cbd5e0;
  }

  .text-right {
    background: #fff;
    display: flex;
    justify-content: flex-end;
  }

  .col-sm-4 {
    display: flex;
    align-items: center;
    justify-content: flex-end;
  }
  .rounded-lg {
      border-radius: 0.375rem;
      margin: 20px 20px 20px 20px; /* Atur radius sudut card */
    }
    .section-title {
      margin-bottom: 1.5rem; /* Atur margin bawah pada judul section */
    }
    .flex-1 {
      flex: 1; /* Ambil sebanyak mungkin ruang yang tersedia */
    }
    .text-lg {
      font-size: 1.125rem; /* Atur ukuran teks h3 */
      margin-bottom: 0.5rem; /* Atur margin bawah pada teks h3 */
 */
  white-space: nowrap;
  width: 208px;
    }
    .delete-button {
    padding: 10px 20px;
    background-color: #e53e3e; /* Warna latar belakang */
    color: #ffffff; /* Warna teks */
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.delete-button:hover {
    background-color: #c53030; /* Warna latar belakang saat dihover */
}


  
  
</style>




    
@section('content')
<div class="section-title">
    {{-- <h2>Upload KOn</h2> --}}
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
		<div class="text-left">
			<h2 class="mt-3 text-2xl font-bold text-gray-900">
				File Upload
			</h2>
		
        <form class="mt-25 space-y-3" action="#" method="POST">
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-1">
                    <ul class="list-disc space-y-4">
                        <li>
                            <label class="label-input">Judul</label>
                            <input class="input-field" type="text" placeholder="Judul">
                        </li>
                        <li>
                            <label class="label-input">Deskripsi</label>
                            <textarea name="description" placeholder="Deskripsi" class="upload-textarea"></textarea>
                        </li>
                    </ul>
                
            </div>
                <div class="col-span-1">
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
                        <button type="submit" class="button mb-10">
                            Upload
                        </button>
                    </div>
        </form>
	</div>
  <div>
<h2>Konten Terkini</h2>
</div>

{{-- search --}}
<div class="wrapper" style="display: flex; justify-content: flex-end; align-items: center;">
  <input type="search" class="form-control">
  <span class="input-group-addon" style="margin-left: 10px;">
    <input type="submit" value="Search" class="btn btn-primary">
  </span>
</div>
{{-- video --}}
        <div class="rounded-lg border text-card-foreground shadow-sm bg-white p-3 flex justify-between items-center">
            <div class="flex-1">
                <div class="flex flex-col">
                            <h3 class="text-lg font-semibold">Judul</h3>
                            <div style="display: flex; align-items: center; width: 100%;">
                              <div style="flex: 25%;">
                                  <video controls poster="/images/w3html5.gif" width="100%">
                                      <source src="movie.mp4" type="video/mp4">
                                      <source src="movie.ogg" type="video/ogg">
                                      Your browser does not support the video tag.
                                  </video>
                              </div>
                              <div style="flex: 55%; margin-left: 10px; text-align: center; ">
                                  <p class="text-sm text-gray-600 max-lines-4" style="white-space: pre-line; ">
                                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus illo ipsa fugiat ut ullam dignissimos perspiciatis autem consequuntur totam, soluta dicta nobis fuga maxime, ea dolor numquam sequi suscipit. Illo. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias nostrum est, impedit ad repellendus repellat exercitationem ipsum, consequuntur sit ratione accusantium necessitatibus distinctio perspiciatis mollitia aliquid voluptate, in similique excepturi!
                                  </p>
                              </div>
                              <div style="flex: 20%; display: flex; align-items: center; justify-content: center;">
                                  <button class="delete-button">Delete</button>
                              </div>
                          </div>
                          
                        </div>
                    </div>
                </div>
            </div>
{{-- foto --}}
<div class="rounded-lg border text-card-foreground shadow-sm bg-white p-3 flex justify-between items-center">
  <div class="flex-1">
      <div class="flex flex-col">
                  <h3 class="text-lg font-semibold">Judul</h3>
                  <div style="display: flex; align-items: center; width: 100%;">
                    <div style="flex: 25%;">
                      <img src="https://asset.kompas.com/crops/V6ViT5zjwooMiYHjl922Cl5FMOM=/0x0:0x0/750x500/data/photo/2022/06/29/62bc3c5f26d8d.jpg" alt="Autumn" width="100%">
                    </div>
                    <div style="flex: 55%; margin-left: 10px; text-align: center; ">
                        <p class="text-sm text-gray-600 max-lines-4" style="white-space: pre-line; ">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus illo ipsa fugiat ut ullam dignissimos perspiciatis autem consequuntur totam, soluta dicta nobis fuga maxime, ea dolor numquam sequi suscipit. Illo. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias nostrum est, impedit ad repellendus repellat exercitationem ipsum, consequuntur sit ratione accusantium necessitatibus distinctio perspiciatis mollitia aliquid voluptate, in similique excepturi!
                        </p>
                    </div>
                    <div style="flex: 20%; display: flex; align-items: center; justify-content: center;">
                        <button class="delete-button">Delete</button>
                    </div>
                </div>
                
              </div>
          </div>
      </div>
  </div>

        </div>
    </aside>
</div>
</div>
</div>

    </div>@endsection


