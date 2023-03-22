#include<stdio.h>
int main()
{
		int fact=1,i,num=1;
		
		printf("Enter the any number:");
		scanf("%d",&num);
		
		for(i=1;i<=num;i++)
		{
		fact = fact * num;
		}
		printf("factorial of %d is %d ",num,fact);
	
}
