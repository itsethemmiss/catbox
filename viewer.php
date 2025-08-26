<?php
session_start();

if (
    !isset($_SESSION['signedInEmail']) ||
    $_SESSION['signedInEmail'] !== 'gg.suii999@gmail.com' ||
    !isset($_SESSION['allowed']) ||
    $_SESSION['allowed'] !== true
) {
    header('Location: 404.html');
    exit();
}

// Optionally clear the allowed flag if you want one-time access:
unset($_SESSION['allowed']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/jpeg" href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIALcAwwMBIgACEQEDEQH/xAAcAAADAQEBAQEBAAAAAAAAAAAAAQIDBAUGBwj/xAA7EAACAQIFAQQHBAoDAQAAAAAAAQIDEQQFEiExBhTBUXEHFCJhgZHRMpLB8CMkQkNicqGx0uEzUsIV/8QAGQEBAQADAQAAAAAAAAAAAAAAAAECAwQF/8QAIREBAAICAQMFAAAAAAAAAAAAAAECAxEyEhMxBBQhQVH/2gAMAwEAAhEDEQA/APqoloiJaNrFoholFIC1wNEopcgWikSikBa4GhIpAMAAAGAABSEigB8iGACAAAGSN8iYCEyhMCAGAHlRLRES0BfeUiUUgKRaZCLRRY0SikQWikSikAwAAGADAEUJcBcB3AXeFgAAABPkTG+QCkJjEwIAYBHlRLRCLiUWuCoiKjwIFFIlcl95Q0UhLgpcGIpFIlcDQFAAAMAKXAAuAAAGNk3AAAAAGSN8iCgTGJgIAAI8lFxIRaKNEUiEUgNEUiEWgKXBSJGiSLGJABSGSigGAAAwEAFLgBAAxPkAABAAUhMYmBIDADyYstMyXJomVGiKRCZSA0TKXJmikBqNEIsCrnldT51DIMpqZlOl2sacoxdNOzld22956dz470q6n0zScYuSWMp3Xz/pckzqFh3dL9c5T1FX9WpqeFxvKoV7Jy/lfD8tmfUJvv5P5+xGGqYmMasYSoYim706sG001xb5fDb3n6H0r6RcDUwEcN1DVeHzCh7NWbptxq2/a2WzfgYxbZMP0AD5+n1t03Oj2n/18NFWTcZXUuL8Wu/geVW9JuQUpTShjJxTspqls/fu7l3A+2PBz3qGOBxFPLcvj6zmtdqMKUeKKe2ufgvBcvu93w/UPpQq439S6XoShOqtPrVVe1H+WPj738j2vR/kksNU9YxP6Sv/AMlSpUeqcpPa7fzJM7k0+7gtMIrU5WVrt3uMAMkAAAUCATAGSMTABBcQHkJ7lpmSZaZUbRexaZlFlpgapjT3M0ylyBqmVfczQOpCM1Fzipc2b7hMq1PA68o9r0nj5WlekoVtv4ZJv+ifyPaVWm/3kPvI+U9Jmf08q6cq4elKMsRjk6EEn9mLXtS+X90YzPwPybH5lV7TTRrzVLm0W9jio03ipy9u87bN/tI5G09MVwj3MjpUqmNoYaVVU6taShHbffa5qhXudPdF5jnuDrYujS9iNNuLvvKVlZee6Z8tmFGrTruhfSk2m7dx/UvT+DoZfldLC4aMXGjCMZbK8mvE/JPS9kuBy/M6WMw6jThiaelw7k47fjexV0/Ostx3qdaLoOD07apRvfyP2f0fZlPMaWM1Qj+icIa4v7Tte1vd+J+FYhOi9pqXfddzP0T0NZ26ONxGU12nDEvtabfOtJJr5W+Qr5Jl+v8AmAXvuBtYgAABMV9hvkkA7hXGyWAmAgA8a5SZipFKRUbxkaJnPGWxakBsmWpWTbdkjGL2PJx2LmsXUpTctEGtKj5LnYwyZOiGdK9U6dmPzbsYSWHavb7TVz4nMMxq1a2qU3fUt787nuONGo7zlV3/AIl9DjnlGCqSbc6934SX0OC2WbOuuLp8OGjj3K13v5ny/XsZ1amDrK+m0o/ifbQyPAx/eYn70foLFdO5bjKPZV3iJQ7nqjdf0JS8Vn5W9JtD8uyjLcRi8VGlRhqqveCXL8j9IfROeYvH1MfRwuIoYatQUJ4SrGMHdW9m/fHUr3W56GS5LluUV6dbDKvUqwfsyqzvY+xpdT14QcOyjLazubu9T9aOxZ6/TsatPAUY4tqWIjQpxqtO6c9Kvv5nxnpH6dznO8ROrgKcLUp0p0JTjrUlG94tJNr2rPje3ketTz+rSnNwpx9ru7kdcOqa9OKSoU2vz7xOak/azhs/D+u8FXhmFGlWw06U6VGMZzdLR2su+WnuXdZnN0pha0M6wUoxl9u97H7Fn08Nn06TzCgn2fEYuyfhfxFl9PLcFG2Hy2iuY63u7MndprUHZtuJcSm+/wDsPtPzY6Hh8PJ8VV7tX+hrC4dd9X7y+hy7dWnN2nl8g7ay/Z+SOr1XDd/a/eX0D1PCvf8ATfeX0GzTkeI0/wDX5I5sVmiw9OU247LwR6bwGElz6x99fQ5sVkOXYmLVSeLXujUj9DKJ/UmJfI5f1NjVjquIjVe8mku5LwPtso6pw+LUaeJtGpbm34Hk0OjcpoRajUxu++9SP+JtHpnK4b9pir+6pH/E21zdP212xb8w+vhUjOKlCSlF8NAfPwy2hGKjHEYxpce3F/8AkDb7qrD20hSLUjmUi1I7HI6VIuMjmjItS3A6oyPCzXfHz+H9kevGR42av9ef8q/E0eo4N2Hkziyk9zKL3LT3POd0NdRerZGKkXGRFa33LT2MVu+PiWnvzcI1XA0zO40/yyDZPYae/v7jFMtBW1ylLYxRSYGsd2VezMtW47ga6x3uZJjuBdxNk3GgLT25AzfIGKvP17lKZydoNVNj3Hku1VClUOJVClVA7lUPLzJ3xV/4UbqqcWNlqr+UUaPUcG7DyKD4LTMlK6XkUpbHnO1sik7GUWWpBWqkVqs/NGKZaZBqn3eI1IhMYGqZalYwTLi9iK2UhpmV9xqW4GyY7makGqN9wNb7f7C6ttyQn4DTApailfvM3KPeCl4MDVsCErq4EZPAVQO0OTtA7Q9p5Ds7UaqnFrGqhdjtVQ5q8r17+CRPabmcpXqPnhGj1HBuw8m8WXc54SNbnnuxrGRWqN9zG5Slp+IVvGfgXqOdMtMg3UhqW5jcuMtiK2W5V7Mx1D1bgbXGpGKluXcDdPYE9zKLKRBpq9qxaMr2QLdcgaaguQG19uQrRPYZi277gRk+UdQO0OZzDWe08h09oCqHNrDWB1qoNSvNv3HGpm+Hd5NmjPwbcPN2Lhlry+JjFlpnA7WqfvuWmYrkoDVP5d5Sl7jFOxakBqpFpmKkUpEVtfcpO25kpFKQ0NVO7K1GK3KRFbJhczTsO4GmrYFIhMGwNdQXM09guBpqsBk2BFfGag1AB7DyhqDWAANSOrBvZ+YAac/Btw83WpFJ7gBwuxWqzKUtgAgrUNboACmnZlXGAAnZXLUrq4gApSL1ABFVGT+AOe+wABSmPWAALVZ3H2lwAgakAARX/9k=" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Video Player</title>
 <script>
    history.replaceState(null, "", "/");
  </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#5D5CDE'
                    }
                }
            }
        }
    </script>
    <style>
        body {
            overflow: hidden;
            touch-action: pan-y;
        }
        .video-container {
            scroll-snap-type: y mandatory;
            scrollbar-width: none;
            -ms-overflow-style: none;
            scroll-behavior: smooth;
        }
        .video-container::-webkit-scrollbar {
            display: none;
        }
        .video-item {
            scroll-snap-align: start;
        }
        video {
            object-fit: contain;
        }
        .progress-bar {
            background: linear-gradient(90deg, #5D5CDE 0%, #8B7CF8 100%);
        }
        .video-progress-bar {
            background: linear-gradient(90deg, #5D5CDE 0%, #8B7CF8 100%);
        }
    </style>
</head>
<body class="bg-black dark:bg-black m-0 p-0">
    <!-- Main Video Container -->
    <div id="videoContainer" class="video-container relative w-full h-screen overflow-y-auto">
        <!-- Videos will be dynamically added here -->
    </div>

    <!-- Fixed UI Overlay -->
    <div class="fixed inset-0 pointer-events-none z-20">
        <!-- Top Bar -->
        <div class="absolute top-0 left-0 right-0 p-4 bg-gradient-to-b from-black/50 to-transparent">
            <div class="flex items-center justify-between text-white">
                <h1 class="text-lg font-semibold">Random Videos</h1>
                <div class="text-sm opacity-75" id="videoCounter">1 / 96</div>
            </div>
            <!-- Session Progress Bar -->
            <div class="w-full bg-white/20 rounded-full h-1 mt-3">
                <div class="progress-bar h-1 rounded-full transition-all duration-300" id="progressBar" style="width: 1%"></div>
            </div>
        </div>
        
        <!-- Bottom Controls -->
        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/50 to-transparent">
            <!-- Video Progress Bar and Time Container -->
            <div class="flex justify-center mb-4">
                <div id="videoControlsContainer" class="flex items-center space-x-3" style="width: 100%;">
                    <!-- Progress Bar (4/5 width) -->
                    <div id="videoProgressContainer" class="bg-white/20 rounded-full h-1 flex-1 cursor-pointer pointer-events-auto relative group">
                        <div class="video-progress-bar h-1 rounded-full transition-all duration-100" id="videoProgressBar" style="width: 0%"></div>
                        <!-- Draggable thumb/circle -->
                        <div id="progressThumb" class="absolute top-1/2 -translate-y-1/2 w-4 h-4 bg-white rounded-full shadow-lg cursor-grab active:cursor-grabbing opacity-100 transition-all duration-200 z-10" style="left: 0%; margin-left: -8px;">
                        </div>
                        <!-- Hover/Active state for better UX -->
                        <div class="absolute inset-0 rounded-full opacity-0 hover:opacity-100 transition-opacity bg-white/10"></div>
                    </div>
                    <!-- Time Display (1/5 width) -->
                    <div id="timeDisplay" class="text-xs text-white opacity-75 text-right" style="min-width: 20%;">
                        <span id="currentTime">0:00</span> / <span id="duration">0:00</span>
                    </div>
                </div>
            </div>
            
            <!-- Controls -->
            <div class="flex items-center justify-between text-white">
                <div class="flex items-center space-x-4">
                    <!-- Mute/Unmute Button -->
                    <button id="muteButton" class="pointer-events-auto p-2 bg-black/40 rounded-full hover:bg-black/60 transition-colors">
                        <div id="unmuteIcon" class="text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/>
                            </svg>
                        </div>
                        <div id="muteIcon" class="text-white hidden">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M16.5 12c0-1.77-1.02-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z"/>
                            </svg>
                        </div>
                    </button>
                </div>
                
                <div class="text-xs opacity-75">
                    <!-- Empty div for layout balance -->
                </div>
            </div>
        </div>
        
        <!-- Right Side Navigation Buttons -->
        <div class="absolute right-4 top-1/2 -translate-y-1/2 flex flex-col space-y-4 pointer-events-auto z-40">
            <button id="upButton" class="bg-black/40 hover:bg-black/60 rounded-full p-3 transition-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                    <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/>
                </svg>
            </button>
            <button id="downButton" class="bg-black/40 hover:bg-black/60 rounded-full p-3 transition-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                    <path d="M7.41 8.84L12 13.42l4.59-4.58L18 10l-6 6-6-6z"/>
                </svg>
            </button>
        </div>

        <!-- Center Controls Hint -->
        <div class="absolute inset-0 flex items-center justify-center">
            <div id="navigationHint" class="text-white text-center opacity-0 transition-opacity duration-500">
                <div class="bg-black/60 rounded-lg px-6 py-4">
                    <div class="text-4xl mb-2">↓</div>
                    <div class="text-sm">Scroll down, swipe down,<br>or press ↓ for next video</div>
                </div>
            </div>
        </div>
        
        <!-- Play/Pause Overlay -->
        <div id="playPauseOverlay" class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300">
            <div class="bg-black/60 rounded-full p-6">
                <div id="playIcon" class="text-white">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </div>
                <div id="pauseIcon" class="text-white hidden">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- Loading Indicator -->
        <div id="loadingIndicator" class="absolute inset-0 flex items-center justify-center bg-black/80">
            <div class="text-white text-center">
                <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-primary mx-auto mb-4"></div>
                <div>Loading video...</div>
            </div>
        </div>
    </div>

    <!-- Touch/Click Area for Play/Pause -->
    <div id="playPauseArea" class="fixed inset-0 z-30"></div>

    <script>
        // Dark mode setup
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        }
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
            if (event.matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        });

        // Video management
        let availableVideos = Array.from({length: 96}, (_, i) => i + 1);
        let currentVideoIndex = 0;
        let currentActiveVideo = null;
        let videos = [];
        let isLoading = false;
        let isMuted = false;
        
        // Touch device detection
        const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
        
        const videoContainer = document.getElementById('videoContainer');
        const videoCounter = document.getElementById('videoCounter');
        const progressBar = document.getElementById('progressBar');
        const videoProgressBar = document.getElementById('videoProgressBar');
        const navigationHint = document.getElementById('navigationHint');
        const playPauseOverlay = document.getElementById('playPauseOverlay');
        const playIcon = document.getElementById('playIcon');
        const pauseIcon = document.getElementById('pauseIcon');
        const playPauseArea = document.getElementById('playPauseArea');
        const loadingIndicator = document.getElementById('loadingIndicator');
        const muteButton = document.getElementById('muteButton');
        const muteIcon = document.getElementById('muteIcon');
        const unmuteIcon = document.getElementById('unmuteIcon');
        const currentTimeSpan = document.getElementById('currentTime');
        const durationSpan = document.getElementById('duration');
        
        function getRandomVideo() {
            if (availableVideos.length === 0) {
                // Reset if all videos have been shown
                availableVideos = Array.from({length: 96}, (_, i) => i + 1);
            }
            
            const randomIndex = Math.floor(Math.random() * availableVideos.length);
            const videoNumber = availableVideos.splice(randomIndex, 1)[0];
            
            return `mp4/${videoNumber}.mp4`;
        }
        
        function createVideoElement(src, index) {
            const videoItem = document.createElement('div');
            videoItem.className = 'video-item relative w-full h-screen flex items-center justify-center bg-black';
            videoItem.dataset.index = index;
            
            const video = document.createElement('video');
            video.className = 'w-full h-full object-contain';
            video.src = src;
            video.loop = false;
            video.playsinline = true;
            video.preload = 'metadata';
            video.muted = isMuted;
            
            // Add time update listener for progress bar
            video.addEventListener('timeupdate', updateVideoProgress);
            video.addEventListener('loadedmetadata', updateVideoDuration);
            
            // Auto-advance to next video when current one ends
            video.addEventListener('ended', () => {
                if (video === currentActiveVideo) {
                    setTimeout(() => {
                        scrollToNext();
                    }, 500);
                }
            });
            
            videoItem.appendChild(video);
            videos.push(video);
            
            return videoItem;
        }
        
        function updateUI() {
            const activeIndex = Math.round(videoContainer.scrollTop / window.innerHeight) + 1;
            videoCounter.textContent = `${activeIndex} / 96`;
            const progress = (activeIndex / 96) * 100;
            progressBar.style.width = `${progress}%`;
        }
        
        function updateVideoProgress() {
            if (currentActiveVideo && currentActiveVideo.duration) {
                const progress = (currentActiveVideo.currentTime / currentActiveVideo.duration) * 100;
                videoProgressBar.style.width = `${progress}%`;
                
                // Update thumb position
                const progressThumb = document.getElementById('progressThumb');
                progressThumb.style.left = `${progress}%`;
                
                currentTimeSpan.textContent = formatTime(currentActiveVideo.currentTime);
            }
        }
        
        function updateVideoDuration() {
            if (currentActiveVideo && currentActiveVideo.duration) {
                durationSpan.textContent = formatTime(currentActiveVideo.duration);
                updateProgressBarWidth();
            }
        }
        
        function updateProgressBarWidth() {
            if (currentActiveVideo) {
                const containerWidth = window.innerWidth;
                const containerHeight = window.innerHeight;
                
                // Video aspect ratio is 9:16
                const videoAspectRatio = 9 / 16;
                const containerAspectRatio = containerWidth / containerHeight;
                
                let videoDisplayWidth;
                
                if (containerAspectRatio > videoAspectRatio) {
                    // Container is wider than video, video height fills container
                    videoDisplayWidth = containerHeight * videoAspectRatio;
                } else {
                    // Container is taller than video, video width fills container
                    videoDisplayWidth = containerWidth;
                }
                
                // Set controls container width to match video display width
                const controlsContainer = document.getElementById('videoControlsContainer');
                controlsContainer.style.width = `${videoDisplayWidth}px`;
            }
        }
        
        function formatTime(seconds) {
            const mins = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60);
            return `${mins}:${secs.toString().padStart(2, '0')}`;
        }
        
        function toggleMute() {
            isMuted = !isMuted;
            videos.forEach(video => {
                video.muted = isMuted;
            });
            
            if (isMuted) {
                muteIcon.classList.remove('hidden');
                unmuteIcon.classList.add('hidden');
            } else {
                muteIcon.classList.add('hidden');
                unmuteIcon.classList.remove('hidden');
            }
        }
        
        function handleVideoIntersection() {
            const containerTop = videoContainer.scrollTop;
            const containerHeight = window.innerHeight;
            const activeIndex = Math.round(containerTop / containerHeight);
            
            videos.forEach((video, index) => {
                if (index === activeIndex) {
                    if (currentActiveVideo && currentActiveVideo !== video) {
                        currentActiveVideo.pause();
                    }
                    currentActiveVideo = video;
                    video.play().catch(console.error);
                    updateVideoDuration();
                } else {
                    video.pause();
                }
            });
            
            updateUI();
        }
        
        function loadMoreVideos() {
            if (isLoading || videos.length >= 96) return;
            
            isLoading = true;
            const batchSize = 3;
            let loadedCount = 0;
            
            for (let i = 0; i < batchSize && videos.length < 96; i++) {
                const src = getRandomVideo();
                const videoElement = createVideoElement(src, videos.length);
                videoContainer.appendChild(videoElement);
                
                const video = videoElement.querySelector('video');
                video.addEventListener('loadeddata', () => {
                    loadedCount++;
                    if (loadedCount === batchSize || videos.length >= 96) {
                        isLoading = false;
                    }
                });
                
                video.addEventListener('error', (e) => {
                    console.error(`Failed to load video: ${src}`, e);
                    loadedCount++;
                    if (loadedCount === batchSize || videos.length >= 96) {
                        isLoading = false;
                    }
                });
            }
        }
        
        function showPlayPauseIcon(isPlaying) {
            if (isPlaying) {
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
            } else {
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
            }
            
            playPauseOverlay.classList.remove('opacity-0');
            setTimeout(() => {
                playPauseOverlay.classList.add('opacity-0');
            }, 800);
        }
        
        function scrollToNext() {
            const currentScroll = videoContainer.scrollTop;
            const nextScroll = currentScroll + window.innerHeight;
            
            if (nextScroll < videoContainer.scrollHeight) {
                videoContainer.scrollTo({
                    top: nextScroll,
                    behavior: 'smooth'
                });
            }
        }
        
        function scrollToPrevious() {
            const currentScroll = videoContainer.scrollTop;
            const prevScroll = Math.max(0, currentScroll - window.innerHeight);
            
            videoContainer.scrollTo({
                top: prevScroll,
                behavior: 'smooth'
            });
        }
        
        // Event listeners
        playPauseArea.addEventListener('click', (e) => {
            e.preventDefault();
            
            // On touch devices, only allow tap (not swipe) to pause/play
            if (isTouchDevice && isSwipeGesture) {
                return;
            }
            
            if (currentActiveVideo) {
                if (currentActiveVideo.paused) {
                    currentActiveVideo.play();
                    showPlayPauseIcon(true);
                } else {
                    currentActiveVideo.pause();
                    showPlayPauseIcon(false);
                }
            }
        });
        
        muteButton.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            toggleMute();
        });
        
        // Progress bar seek functionality
        const videoProgressContainer = document.getElementById('videoProgressContainer');
        const progressThumb = document.getElementById('progressThumb');
        let isDragging = false;
        
        function seekVideo(e) {
            if (!currentActiveVideo || !currentActiveVideo.duration) return;
            
            const rect = videoProgressContainer.getBoundingClientRect();
            const clickX = (e.clientX || e.touches?.[0]?.clientX) - rect.left;
            const percentage = Math.max(0, Math.min(1, clickX / rect.width));
            const seekTime = percentage * currentActiveVideo.duration;
            
            currentActiveVideo.currentTime = seekTime;
        }
        
        function seekForward(seconds = 5) {
            if (!currentActiveVideo || !currentActiveVideo.duration) return;
            const newTime = Math.min(currentActiveVideo.currentTime + seconds, currentActiveVideo.duration);
            currentActiveVideo.currentTime = newTime;
        }
        
        function seekBackward(seconds = 5) {
            if (!currentActiveVideo || !currentActiveVideo.duration) return;
            const newTime = Math.max(currentActiveVideo.currentTime - seconds, 0);
            currentActiveVideo.currentTime = newTime;
        }
        
        // Simplified drag functionality
        let startDrag = false;
        
        progressThumb.addEventListener('mousedown', (e) => {
            e.preventDefault();
            e.stopPropagation();
            startDrag = true;
            isDragging = true;
            document.body.style.userSelect = 'none';
        });
        
        progressThumb.addEventListener('touchstart', (e) => {
            e.preventDefault();
            e.stopPropagation();
            startDrag = true;
            isDragging = true;
        });
        
        document.addEventListener('mousemove', (e) => {
            if (isDragging && startDrag) {
                e.preventDefault();
                seekVideo(e);
            }
        });
        
        document.addEventListener('touchmove', (e) => {
            if (isDragging && startDrag) {
                e.preventDefault();
                seekVideo(e);
            }
        });
        
        document.addEventListener('mouseup', () => {
            startDrag = false;
            isDragging = false;
            document.body.style.userSelect = '';
        });
        
        document.addEventListener('touchend', () => {
            startDrag = false;
            isDragging = false;
        });
        
        // Click on progress bar to seek
        videoProgressContainer.addEventListener('click', (e) => {
            if (!isDragging) {
                e.preventDefault();
                e.stopPropagation();
                seekVideo(e);
            }
        });
        
        // Scroll handling
        let scrollTimeout;
        videoContainer.addEventListener('scroll', () => {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                handleVideoIntersection();
                
                // Load more videos when near the end
                const scrollProgress = (videoContainer.scrollTop + videoContainer.clientHeight) / videoContainer.scrollHeight;
                if (scrollProgress > 0.7) {
                    loadMoreVideos();
                }
            }, 100);
        });
        
        // Touch navigation for mobile
        let touchStartY = 0;
        let touchEndY = 0;
        let isSwipeGesture = false;
        
        document.addEventListener('touchstart', (e) => {
            touchStartY = e.touches[0].clientY;
            isSwipeGesture = false;
        });
        
        document.addEventListener('touchend', (e) => {
            touchEndY = e.changedTouches[0].clientY;
            const deltaY = touchStartY - touchEndY;
            
            if (Math.abs(deltaY) > 50) {
                isSwipeGesture = true;
                if (deltaY > 0) {
                    // Swiped up (next video)
                    scrollToNext();
                } else {
                    // Swiped down (previous video) 
                    scrollToPrevious();
                }
            }
        });
        
        // Mouse wheel support
        document.addEventListener('wheel', (e) => {
            if (e.deltaY > 0) {
                // Scroll down (next video)
                scrollToNext();
            } else {
                // Scroll up (previous video)
                scrollToPrevious();
            }
        });
        
        // Navigation button event listeners
        document.getElementById('upButton').addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            scrollToPrevious();
        });
        
        document.getElementById('downButton').addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            scrollToNext();
        });
        
        // Keyboard support
        document.addEventListener('keydown', (e) => {
            switch(e.key) {
                case 'ArrowDown':
                    e.preventDefault();
                    scrollToNext();
                    break;
                case 'ArrowUp':
                    e.preventDefault();
                    scrollToPrevious();
                    break;
                case 'ArrowLeft':
                    e.preventDefault();
                    seekBackward(5);
                    break;
                case 'ArrowRight':
                    e.preventDefault();
                    seekForward(5);
                    break;
                case ' ':
                    e.preventDefault();
                    if (currentActiveVideo) {
                        if (currentActiveVideo.paused) {
                            currentActiveVideo.play();
                            showPlayPauseIcon(true);
                        } else {
                            currentActiveVideo.pause();
                            showPlayPauseIcon(false);
                        }
                    }
                    break;
                case 'm':
                case 'M':
                    e.preventDefault();
                    toggleMute();
                    break;
            }
        });
        
        // Show navigation hint initially
        setTimeout(() => {
            navigationHint.classList.remove('opacity-0');
            setTimeout(() => {
                navigationHint.classList.add('opacity-0');
            }, 3000);
        }, 1000);
        
        // Initialize
        loadingIndicator.classList.remove('hidden');
        loadMoreVideos();
        
        // Start playing first video after a short delay
        setTimeout(() => {
            if (videos.length > 0) {
                currentActiveVideo = videos[0];
                currentActiveVideo.play().catch(console.error);
                updateUI();
                updateVideoDuration();
                loadingIndicator.classList.add('hidden');
            }
        }, 1000);
        
        // Prevent context menu on long press
        document.addEventListener('contextmenu', (e) => e.preventDefault());
        
        // Handle visibility change to pause/play video
        document.addEventListener('visibilitychange', () => {
            if (currentActiveVideo) {
                if (document.hidden) {
                    currentActiveVideo.pause();
                } else {
                    currentActiveVideo.play().catch(console.error);
                }
            }
        });
        
        // Handle window resize
        window.addEventListener('resize', () => {
            handleVideoIntersection();
        });
    </script>
</body>
</html>

