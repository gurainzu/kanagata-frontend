<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanagata - Project</title>
    <link rel="stylesheet" href="{{ asset('src/output.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('src/scroll-hover.css') }}">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body class="font-poppins">
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="{{ route('dashboard') }}" class="flex ms-2 md:me-24">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Kanagata</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 dark:bg-white rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <svg class="w-8 h-8 p-1 text-white dark:text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-sm shadow-sm dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    {{ Auth::user()->name }}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white text-left">
                                            Sign out
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <!-- Sidebar items -->
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z" />
                            <path
                                d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('projects.index') }}"
                        class="flex items-center p-2 text-white rounded-lg hover:text-gray-900 dark:text-white dark:hover:text-white bg-blue-500 hover:bg-blue-600 dark:hover:bg-gray-700 group">
                        <svg class="shrink-0 w-5 h-5 text-white transition duration-75 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 25 25">
                            <path fill-rule="evenodd"
                                d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Project</span>
                    </a>
                </li>
                <!-- Tambahkan menu lainnya sesuai kebutuhan -->
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div id="project-body" class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div id="project-overview-container">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-3xl font-bold font-poppins">Projects</h1>
                    <div class="flex">
                        <a href="#" data-modal-target="project-modal" data-modal-toggle="project-modal" class="flex items-center text-blue-600 dark:text-blue-100 bg-blue-100 dark:bg-blue-600 hover:bg-blue-200 dark:hover:bg-blue-700 px-2 py-1 rounded-lg whitespace-nowrap">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h14m-7 7V5" />
                            </svg>
                            <h1 class="text-md font-medium px-2">
                                Add Project
                            </h1>
                        </a>
                    </div>
                </div>
    
                <div id="project-details" class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 text-center uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">No</th>
                                <th scope="col" class="px-6 py-3">Customer</th>
                                <th scope="col" class="px-6 py-3">Tutor</th>
                                <th scope="col" class="px-6 py-3">Tahun Ajaran</th>
                                <th scope="col" class="px-6 py-3">Kegiatan</th>
                                <th scope="col" class="px-6 py-3">Prodi</th>
                                <th scope="col" class="px-6 py-3">Grade</th>
                                <th scope="col" class="px-6 py-3">Quantity</th>
                                <th scope="col" class="px-6 py-3">Rate Tutor</th>
                                <th scope="col" class="px-6 py-3">GT Rev</th>
                                <th scope="col" class="px-6 py-3">Jam Pertemuan</th>
                                <th scope="col" class="px-6 py-3">SUM AP</th>
                                <th scope="col" class="px-6 py-3">GT COST</th>
                                <th scope="col" class="px-6 py-3">GT MARGIN</th>
                                <th scope="col" class="px-6 py-3">AR</th>
                                <th scope="col" class="px-6 py-3">AR OUT</th>
                                <th scope="col" class="px-6 py-3">SUM AR</th>
                                <th scope="col" class="px-6 py-3">AR PAID</th>
                                <th scope="col" class="px-6 py-3">TO DO</th>
                                <th scope="col" class="px-6 py-3">ARUS KAS</th>
                                <th scope="col" class="px-6 py-3">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($projects as $index => $project)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                                <td class="px-6 py-4">{{ $index + 1 }}</td>
                                <td class="px-6 py-4">{{ $project->customer_name }}</td>
                                <td class="px-6 py-4">{{ $project->tutor_name }}</td>
                                <td class="px-6 py-4">{{ $project->tahun_ajaran }}</td>
                                <td class="px-6 py-4">{{ $project->activity }}</td>
                                <td class="px-6 py-4">{{ $project->prodi }}</td>
                                <td class="px-6 py-4">{{ $project->grade }}</td>
                                <td class="px-6 py-4">{{ $project->quantity }}</td>
                                <td class="px-6 py-4">{{ $project->rate_tutor }}</td>
                                <td class="px-6 py-4">{{ $project->gt_rev }}</td>
                                <td class="px-6 py-4">{{ $project->jam_pertemuan }}</td>
                                <td class="px-6 py-4">{{ $project->sum_ip }}</td>
                                <td class="px-6 py-4">{{ $project->gt_cost }}</td>
                                <td class="px-6 py-4">{{ $project->gt_margin }}</td>
                                <td class="px-6 py-4">{{ $project->ar }}</td>
                                <td class="px-6 py-4">{{ $project->ar_outstanding }}</td>
                                <td class="px-6 py-4">{{ $project->sum_ar }}</td>
                                <td class="px-6 py-4">{{ $project->sum_ar_paid }}</td>
                                <td class="px-6 py-4">{{ $project->todo }}</td>
                                <td class="px-6 py-4">{{ $project->arus_kas }}</td>
                                <td class="px-6 py-4 flex justify-center">
                                    <a href="#" data-modal-target="project-modal" data-project-id="{{ $project->id }}" class="mx-2 font-medium text-blue-600 dark:text-blue-100 bg-blue-100 dark:bg-blue-600 hover:bg-blue-200 dark:hover:bg-blue-700 px-4 py-1 rounded-md">Edit</a>
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="mx-2 font-medium text-red-600 dark:text-red-200 bg-red-100 dark:bg-red-600 hover:bg-red-200 dark:hover:bg-red-700 px-4 py-1 rounded-md">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan modal untuk create/edit -->
    <div id="project-modal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 overflow-x-auto justify-center items-start w-full h-full bg-black bg-opacity-50">
        <div class="relative p-4 w-full max-w-4xl h-auto"> <!-- Changed height to viewport height -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 h-full flex flex-col">
                <!-- Header -->
                <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600 bg-white dark:bg-gray-700 z-10">
                    <h3 id="modal-title" class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tambah Proyek
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="project-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Scrollable Content -->
                <div class="p-6 overflow-y-auto flex-grow">
                    <form id="project-form" method="POST" action="{{ route('projects.store') }}" novalidate>
                        @csrf
                        @if($errors->any())
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="space-y-6">
                            <!-- Tahun Ajaran Section -->
                            <div class="dark:bg-gray-800 p-4 rounded-lg">
                                <label for="customer_name" class="block text-lg font-medium text-gray-900 dark:text-white mb-4">Jenis Institusi</label>
                                <select id="customer_name" name="customer_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option value="" selected disabled>Pilih Jenis Institusi</option>
                                    <option value="MAN" {{ old('customer_name') == 'MAN' ? 'selected' : ''}}>MAN</option>
                                    <option value="SMA" {{ old('customer_name') == 'SMA' ? 'selected' : ''}}>SMA</option>
                                    <option value="SMK" {{ old('customer_name') == 'SMK' ? 'selected' : ''}}>SMK</option>
                                    <option value="UNIVERSITAS" {{ old('customer_name') == 'UNIVERSITAS' ? 'selected' : ''}}>UNIVERSITAS</option>
                                </select>
                            </div>
    
                            <!-- Kegiatan Section -->
                            <div class="dark:bg-gray-800 p-4 rounded-lg">
                                <label for="tutor_name" class="block text-lg font-medium text-gray-900 dark:text-white mb-4">Nama Tutor</label>
                                <select id="tutor_name" name="tutor_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option value="" selected disabled>Pilih Tutor</option>
                                    <option  value="andar praskasa" {{ old('tutor_name') == 'andar praskasa' ? 'selected' : ''}}>Andar Praskasa</option>
                                    <option  value="danu steven" {{ old('tutor_name') == 'danu steven' ? 'selected' : ''}}>Danu Steven</option>
                                    <option  value="michale sudarsono" {{ old('tutor_name') == 'michale sudarsono' ? 'selected' : ''}}>Michale Sudarsono</option>
                                    <option  value="wit urrohman" {{ old('tutor_name') == 'wit urohman' ? 'selected' : ''}}>Wit Urrohman</option>
                                    <option  value="ageng prasetyo" {{ old('tutor_name') == 'ageng prasetyo' ? 'selected' : ''}}>Ageng Prasetyo</option>
                                </select>
                            </div>
                            
    
                            <!-- Prodi & Grade Section -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Tahun ajaran</h4>
                                    <input type="text" id="tahun_ajaran" name="tahun_ajaran" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <label for="activity" class="block text-lg font-medium text-gray-900 dark:text-white mb-4">Jenis Kegiatan</label>
                                    <select id="activity" name="activity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                        <option value="" selected disabled>Pilih Kegiatan</option>
                                        <option value="Workshop"  {{ old('activity') == 'workshop' ? 'selected' : ''}}>Workshop</option>
                                        <option value="Pelatihan" {{ old('activity') == 'pelatihan' ? 'selected' : ''}}>Pelatihan</option>
                                        <option value="Seminar" {{ old('activity') == 'seminar' ? 'selected' : ''}}>Seminar</option>
                                        <option value="incubasi" {{ old('activity') == 'incubasi' ? 'selected' : ''}}>Incubasi</option>
                                    </select>
                                </div>                                
                            </div>

                            <div class="dark:bg-gray-800 p-4 rounded-lg">
                                <label for="prodi" class="block text-lg font-medium text-gray-900 dark:text-white mb-4">Program Studi</label>
                                <select id="prodi" name="prodi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option  value="" selected disabled>Pilih Prodi</option>
                                    <option  value="TKJ" {{ old('prodi') == 'TKJ' ? 'selected' : ''}}>Teknik Komputer dan Jaringan (TKJ)</option>
                                    <option  value="RPL" {{ old('prodi') == 'RPL' ? 'selected' : ''}}>Rekayasa Perangkat Lunak (RPL)</option>
                                    <option  value="MM"  {{ old('prodi') == 'MM' ? 'selected' : ''}}>Multimedia (MM)</option>
                                    <option  value="BDP" {{ old('prodi') == 'BDP' ? 'selected' : ''}}>Bisnis Daring dan Pemasaran (BDP)</option>
                                </select>
                            </div>
                            <div class="dark:bg-gray-800 p-4 rounded-lg">
                                <label for="grade" class="block text-lg font-medium text-gray-900 dark:text-white mb-4">Tingkat Kelas</label>
                                <select id="grade" name="grade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option value="" selected disabled>Pilih Kelas</option>
                                    <option value="X"  {{ old('grade') == 'X' ? 'selected' : ''}}>Kelas X</option>
                                    <option value="XI" {{ old('grade') == 'XI' ? 'selected' : ''}}>Kelas XI</option>
                                    <option value="XII"{{ old('grade') == 'XII' ? 'selected' : ''}}>Kelas XII</option>
                                </select>
                            </div>
                            </div>
    
                            <!-- Quantity & Rate Tutor Section -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Quantity</h4>
                                    <input type="number" id="quantity" name="quantity" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Rate Tutor</h4>
                                    <input type="number" id="rate_tutor" name="rate_tutor" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                            </div>
    
                            <!-- Jam Pertemuan & GT Rev Section -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Jam Pertemuan</h4>
                                    <input type="number" id="jam_pertemuan" name="jam_pertemuan" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">GT Revenue</h4>
                                    <input type="number" id="gt_rev" name="gt_rev" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                            </div>
    
                            <!-- SUM AP & GT COST Section -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Summary AP</h4>
                                    <input type="number" id="sum_ip" name="sum_ip" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">GT Cost</h4>
                                    <input type="number" id="gt_cost" name="gt_cost" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">GT Margin</h4>
                                    <input type="number" id="gt_margin" name="gt_margin" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                            </div>
    
                            <!-- AR & AR OUT Section -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">AR</h4>
                                    <input type="number" id="ar" name="ar" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">AR Out</h4>
                                    <input type="number" id="ar_outstanding" name="ar_outstanding" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                            </div>
    
                            <!-- SUM AR & AR PAID Section -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Summary AR</h4>
                                    <input type="number" id="sum_ar" name="sum_ar" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">AR Paid</h4>
                                    <input type="number" id="sum_ar_paid" name="sum_ar_paid" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                            </div>
    
                            <!-- TO DO & ARUS KAS Section -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">To Do</h4>
                                    <input type="number" id="todo" name="todo" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                                <div class="dark:bg-gray-800 p-4 rounded-lg">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Arus Kas</h4>
                                    <input type="number" id="arus_kas" name="arus_kas" class="bg-white dark:bg-gray-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end space-x-3 p-6">
                            <button type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" data-modal-hide="project-modal">Batal</button>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                        </div>
                    </form>
                </div>
                
                <!-- Sticky Footer -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/project.js') }}"></script>

    @if(session('success'))
    <script>
        showSuccessMessage("{{ session('success') }}");
    </script>
    @endif

    @if(session('error'))
    <script>
        showErrorMessage("{{ session('error') }}");
    </script>
    @endif
</body>

</html>