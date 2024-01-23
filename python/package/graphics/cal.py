result=0
def add(a,b):
    global result
    if(result==0):
        result=a+b
        print("Result is:",result)
    else:
        b=int(input("Enter the second value:"))
        result=result+b
        print("Result is:",result)

def sub(a,b):
    global result
    if(result==0):
        a=int(input("Enter the first value:"))
        b=int(input("Enter the second value:"))
        result=a-b
        print("Result is:",result)
    else:
        b=int(input("Enter the second value:"))
        result=result-b
        print("Result is:",result)
        

def mul(a,b):
    global result
    if(result==0):
        a=int(input("Enter the first value:"))
        b=int(input("Enter the second value:"))
        result=a*b
        print("Result is:",result)
    else:
        b=int(input("Enter the second value:"))
        result=result*b
        print("Result is:",result)

def div(a,b):
    global result
    if(result==0):
        a=int(input("Enter the first value:"))
        b=int(input("Enter the second value:"))
        result=a/b
        print("Result is:",result)
    else:
        b=int(input("Enter the second value:"))
        result=result/b
        print("Result is:",result)


while True:
    print("\n1.Addition\n2.Substraction\n3.Multiplication\n4.Division")
    ch=(int(input("Enter your choice:")))
    if(ch==1):
        a=int(input("Enter the first value:"))
        b=int(input("Enter the second value:"))
        add(a,b)
    elif(ch==2):
        a=int(input("Enter the first value:"))
        b=int(input("Enter the second value:"))
        sub(a,b)
    elif(ch==3):
        a=int(input("Enter the first value:"))
        b=int(input("Enter the second value:"))
        mul(a,b)
    elif(ch==4):
        a=int(input("Enter the first value:"))
        b=int(input("Enter the second value:"))
        div(a,b)
    else:
        clear()


          

