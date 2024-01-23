str=input("Enter the two words:").split()
str2=str[1][0]+str[0][1:] +" "+ str[0][0] + str[1][1:]
print(str2)