@extends('front.layouts.main')

@section('title', 'Image Resizer')
@section('description', 'Easily resize your images to the desired dimensions with our image resizer')

@section('styles')
<link href="/web-assets/css/styles-tool.css" rel="stylesheet" rel="preload" as="style">
<style>
    #main_container {
        width: 100%;
        margin: 20px;
        margin-left: auto;
        margin-right: auto;
        padding: 30px;
        font-family: sans-serif;
        border-radius: 20px;
        border: 3px solid #999;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    .result-container {
        margin-top: 20px;
    }

    .result-image {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }
</style>
@endsection

@section('content')
<section>
    <div class="section banner-4 banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <div>
                        <p class="mb-3 content-1 h5 text-white">Primusvidya <span class="tx-info-dark">Tools</span></p>
                        <p class="mb-0 tx-16">Explore our wide variety of tools to make your life simpler!!</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <img class="card-img-top" src="/web-assets/images/tools/image-resizer.webp" alt="image resizer">
                    <div class="card-body pt-3">
                        <h1 class="h3 text-center">Image Resizer</h1>
                        <div id="main_container">
                            <form id="resizerForm" class="py-2">
                                <div class="form-group">
                                    <label for="image">Upload Image:</label>
                                    <input type="file" class="form-control-file" id="image">
                                </div>
                                <div class="form-group">
                                    <label for="width">Width (pixels):</label>
                                    <input type="number" class="form-control" id="width" placeholder="Enter desired width">
                                </div>
                                <div class="form-group">
                                    <label for="height">Height (pixels):</label>
                                    <input type="number" class="form-control" id="height" placeholder="Enter desired height">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Resize</button>
                            </form>
                            <div id="resultContainer" class="result-container py-2" style="display: none;">
                                <h4 class="text-center">Resized Image</h4>
                                <img id="resultImage" class="result-image" src="" alt="Resized Image">
                                <div class="text-center">
                                    <a id="downloadLink" href="" download class="btn btn-primary">Download</a>
                                </div>
                            </div>
                            <h2 class="h4">Welcome to our Image Resizer!</h2>
                            <p class="card-text">Are you tired of struggling with large image files that take up too much space or take forever to upload or share? Our Image Resizer is the perfect solution for you. With our user-friendly tool, you can easily resize your images to the desired dimensions without compromising on quality. Whether you're a photographer, blogger, social media enthusiast, or just someone who wants to resize images for personal use, our Image Resizer is here to make your life easier.</p>
                            <p class="h4">How does it work? It's simple! Follow these steps:</p>
                            <p class="card-text"><span class="fw-bold">Upload your image: </span> Start by selecting the image you want to resize. You can either drag and drop the image into our resizer or use the file upload button to browse and select the image from your device.</p>
                            <p class="card-text"><span class="fw-bold">Set the dimensions: </span>Next, specify the desired dimensions for your resized image. You can choose to resize by percentage, pixels, or select from common preset sizes such as social media profile pictures, website banners, or custom dimensions.</p>
                            <p class="card-text"><span class="fw-bold">Resize and download: </span>Once you've set the dimensions and customized the options (if desired), click on the "Resize" button. Our Image Resizer will process your image, maintain its quality, and provide you with a resized version ready for download.</p>
                            <p class="h4">Key Features of our Image Resizer:</p>
                            <p class="card-text">Our resizer utilizes advanced algorithms to resize your images while maintaining their quality. You don't have to worry about blurry or pixelated results.</p>
                            <p class="card-text">Whether you need to resize images by pixel dimensions our tool offers flexibility to suit your requirements.</p>
                            <p class="card-text">Our resizer is designed to be fast, intuitive, and easy to use. You can resize your images in just a few clicks without any technical expertise.</p>
                            <p class="card-text">Our Image Resizer is a valuable tool for various purposes, including optimizing images for websites, reducing file sizes for faster sharing, creating thumbnails, or preparing images for social media platforms.</p>
                            <p class="card-text">Stop struggling with oversized images and start using our Image Resizer today. Resize your images with ease, maintain quality, and enhance your digital content effortlessly.</p>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-xl-4">
            @include('front.parts.tool-side-panel')
            </div>
        </div>
    </div>
</section>
@include('front.parts.universityCarousel')

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Handle file input change event
        $("#image").on("change", function(event) {
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                $("#imagePreview").attr("src", e.target.result);
            };

            reader.readAsDataURL(file);
        });

        // Handle form submission
        $("#resizerForm").submit(function(event) {
            event.preventDefault();

            // Get the input values
            var fileInput = document.getElementById('image');
            var width = parseInt($("#width").val());
            var height = parseInt($("#height").val());

            // Check if input values are valid
            if (isNaN(width) || isNaN(height) || width <= 0 || height <= 0) {
                alert("Please enter valid width and height values.");
                return;
            }

            // Check if a file is selected
            if (fileInput.files.length === 0) {
                alert("Please select an image file.");
                return;
            }

            // Read the file and create an image object
            var reader = new FileReader();
            reader.onload = function(e) {
                var image = new Image();
                image.onload = function() {
                    // Create a canvas element
                    var canvas = document.createElement('canvas');
                    canvas.width = width;
                    canvas.height = height;

                    // Resize the image using canvas
                    var ctx = canvas.getContext('2d');
                    ctx.drawImage(image, 0, 0, width, height);

                    // Get the resized image as a Blob
                    canvas.toBlob(function(blob) {
                        // Create a download link
                        var downloadLink = document.createElement('a');
                        downloadLink.href = URL.createObjectURL(blob);
                        downloadLink.download = fileInput.files[0].name;

                        // Simulate a click on the download link to start the download
                        downloadLink.click();
                    }, fileInput.files[0].type);
                };
                image.src = e.target.result;
            };
            reader.readAsDataURL(fileInput.files[0]);
        });
    });
</script>
@endsection