@include('layout.header')
    <div class="flex justify-center text-center">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="input">Silahkan input file dibawah ini : </label> <br>
            <input type="file" name="input" id="input" class="border border-solid border-black mt-2 bg-gray-200"> <br>
            <input type="submit" value="Upload" class="border border-solid border-black bg-gray-200 mt-2 pl-2 pr-2">
        </form>
    </div>
@include('layout.footer')