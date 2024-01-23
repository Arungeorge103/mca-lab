exp = input("Enter the expression:")
if('+' in exp):
    i=exp.index('+')
    print("The sum of",exp[0:i],"and",exp[i+1:],"is:")
    print(int(exp[0:i])+int(exp[i+1:]))
    
