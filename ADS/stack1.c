
#include<stdio.h>
#include<stdlib.h>
#define n 3
int top=-1;
int stack1[n];
int isEmpty()
{
    if(top==-1)
    {
        printf("The stack is empty\n");
        return 1;
    }
    else
    {
        return 0;
    }
}
int isFull()
{
    if(top==n-1)
    {
        printf("The stack is Full,Cannot insert!!\n");
        return 1;
    }
    else
    {
        return 0;
    }
}
void display()
{
    if(isEmpty()==1)
    {
        return;
    }
    else
    {
        printf("The stack is\n");
        for(int i=0;i<=top;i++)
        {
            printf("%d\n",stack1[i]);
        }
    }
}
void push()
{
    int item;
    if(isFull()==1)
    {
        return;
    }
    else
    {
        printf("Enter the item to insert:");
        scanf("%d",&item);
        top++;
        stack1[top]=item;
    }
}
void pop()
{
    if(isEmpty()==1)
    {
        return;
    }
    else
    {
        printf("%d is deleted",stack1[top]);
        top--;
    }
}
int main()
{
  
    do
    {
        int ch;
        printf("1.PUSH\n2.POP\n3.DISPLAY\n4.EXIT");
        printf("\nEnter your choice:");
        scanf("%d",&ch);
        switch(ch)
        {
            case 1:
                push();
                break;
            case 2:
                pop();
                break;
            case 3:
                display();
                break;
            case 4:
                printf("Exiting!!!!");
                return 0;
            break;
            default:
                printf("Invalid choice");
                break;
        }
    }
    while(1);
}