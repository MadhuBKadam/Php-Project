import csv
from opcode import opmap
def addcsvfile(username,password):
    f=open('user.csv','a')
    newFileWriter=csv.writer(f)
    newFileWriter.writerow([username,password])
    f.close()

def readcsvfile():
    with open('user.csv','r') as newfile:
        newfilereader=csv.reader(newfile)
        for row in newfilereader:
            print(row[0],row[1])
    newfile.close()
addcsvfile("Arjun","123@456")
addcsvfile("Arunuma","aru@nima") 
addcsvfile("Frieda","myname@FRD")
readcsvfile() 


#new hs

str=input("Enter a string ");
vowel=0
consonants=0
for i in str:
    if(i=='a' or i=='e' or i=='i' or i=='0' or i=='u' or i=='A' or i=='E' or i=='I' or i=='O' or i=='U'):
        vowel=vowel+1;
    else:
        consonants=consonants+1;
        print("The Number of Vowels:",vowel);
        print("The Number of Consonants:",consonants);