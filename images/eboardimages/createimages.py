import urllib



f = open("president", "r");

for l in f.readlines():
	s = l[:-1] + ".jpg"
	urllib.urlretrieve("http://lorempixel.com/people/200/250/", s)



