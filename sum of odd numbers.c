#include<stdio.h>
int main()
{
		int i,n,oddsum=0;
		
		printf("Enter the Any numbers");
		scanf("%d",&n);

		for(i=1;i<=n;i++)
			
			if(i%2==1)
				{
						printf("The number is odd numbers%d \n",i);
						oddsum=oddsum+i;
				}
				
			printf("The number is odd numbers of sum%d ",oddsum);
}
