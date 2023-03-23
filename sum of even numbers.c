#include<stdio.h>
int main()
{
		int i,n,evensum=0;
		
		printf("Enter the Any numbers");
		scanf("%d",&n);

		for(i=1;i<=n;i++)
			
			if(i%2==0)
				{
						printf("The number is even numbers%d \n",i);
						evensum=evensum+i;
				}
				
			printf("The number is odd numbers of sum%d ",evensum);
}
