# transcode and compress movie file
# libx265 - only recently supported by many browsers
ffmpeg -i inputfile.mov -vcodec libx265 -crf 28 outputfile.mp4
# avi - supported more widely
ffmpeg -i inputfile.mov -c:v libaom-av1 outputfile.av1.mp4