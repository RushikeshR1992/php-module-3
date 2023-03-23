#include<stdio.h>
int main()
{
		int i,n;
		printf("Enter the Any numbers of the tables");
		scanf("%d",&n);
		
		for(i=1;i<=n;i++)
		{
			printf("\nTable %d * %d = %d",n,i,(i*n));
		}
}
