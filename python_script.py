import qrcode
import os
fp = open("test.txt", "r")
data = fp.readline()
filename = "site.png"
img = qrcode.make(data)
img.save(filename)
#print(os.abspath(filename))
