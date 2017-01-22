#!/usr/bin/python3.5
import sys



keyword_survey = list()
args = sys.argv[1:]
for i in args:
    keyword_survey.append(i)
print(keyword_survey)


loc1 = ['ilsan','incheon','bucheon','hongje']
loc2 = ['notilsan','notincheon','notbucheon','nothonge']

def plus(lst):

	if(lst[0] == "1"):
		if(lst[1] == "2"):
			if(lst[2] == "3"):
				return loc1
	
	else:
		return loc2




print (plus(keyword_survey))



