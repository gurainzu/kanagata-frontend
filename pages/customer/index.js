let customerBody = document.getElementById("customer-body");
let addCustomerButton = document.querySelector("#add-customer-button");
const customerAddingState = `<div class="flex items-center justify-between">
    <h1 class="text-3xl font-bold font-poppins">Adding Customer</h1>
    <div class="flex">
        <div class="mx-2 whitespace-nowrap">
            <a href="">
                <h1
                    class="text-md font-medium text-green-600 dark:text-green-200 bg-green-100 dark:bg-green-600 hover:bg-green-200 dark:hover:bg-green-700 py-1 px-4 rounded-lg">
                    Save Changes
                </h1>
            </a>
        </div>
        <div class="mx-2 whitespace-nowrap">
            <a href="../customer/index.html">
                <h1
                    class="text-md font-medium text-red-600 dark:text-red-200 bg-red-100 dark:bg-red-600 hover:bg-red-200 dark:hover:bg-red-700 py-1 px-4 rounded-lg">
                    Cancel
                </h1>
            </a>
        </div>
    </div>
</div>
<div class="mt-4 p-6 dark:bg-gray-900 rounded-lg">
    <div class="w-full flex">
        <div class="w-2/4 p-2">
            <img id="profile" src="" class="max-w-[100px]" />
            <div id="upload-container">
                <label id="upload-label" for="imgInp"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50  dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1000x1000px)
                        </p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                    <form runat="server">
                        <input accept="image/*" type='file' id="imgInp" class="hidden" />
                    </form>
                </label>
            </div>
            <button id="change-photo-btn"
                class="hidden cursor-pointer mt-2 font-semibold text-blue-600 dark:text-blue-100 bg-blue-100 dark:bg-blue-600 hover:bg-blue-200 dark:hover:bg-blue-700 px-3 py-2 rounded-lg whitespace-nowrap">
                Change Photo
            </button>
        </div>
        <div class="w-full p-2">
            <div class="relative mb-6">
                <input type="text" id="floating_outlined"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="floating_outlined"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Instance
                    Name</label>
            </div>
            <div class="relative mb-6">
                <input type="text" id="floating_outlined"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="floating_outlined"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Phone
                    Number</label>
            </div>
            <div class="relative mb-6">
                <input type="text" id="floating_outlined"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="floating_outlined"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Email</label>
            </div>
            <div class="relative mb-6">
                <input type="text" id="floating_outlined"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="floating_outlined"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Addresses</label>
            </div>
            <div class="relative mb-6">
                <input type="text" id="floating_outlined"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="floating_outlined"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Description</label>
            </div>
        </div>
    </div>
</div>`;

addCustomerButton.addEventListener("click", () => {
  customerBody.innerHTML = customerAddingState;

  // Now that the elements exist in the DOM, we can set up their event listeners
  const imgInp = document.getElementById("imgInp");
  const profile = document.getElementById("profile");
  const changePhotoBtn = document.getElementById("change-photo-btn");
  const uploadLabel = document.getElementById("upload-label");

  imgInp.onchange = (evt) => {
    const [file] = imgInp.files;
    if (file) {
      profile.src = URL.createObjectURL(file);
      uploadLabel.classList.add("hidden");
      changePhotoBtn.classList.remove("hidden");
    }
  };

  changePhotoBtn.addEventListener("click", function () {
    uploadLabel.classList.remove("hidden");
    this.classList.add("hidden");
    imgInp.value = ""; // Reset input file
    profile.src = ""; // Remove preview
  });
});
