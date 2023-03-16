#include<stdio.h>
#define pi 3.14
int main()
	{
		int rectangle,circle,r,h,w;
		float triangle;
		
		
		printf("Enter the Radition:");
		scanf("%d",&r);
		printf("Enter the High value:");
		scanf("%d",&h);
		printf("Enter the width value:");
		scanf("%d",&w);
		
		circle=pi*r*r;
		rectangle=h*w;
		triangle=h*w/2;
		
		printf("circle=%d\n",circle);
		printf("rectangle=%d\n",rectangle);
		printf("triangle=%.2lf\n",triangle);
		
		return 0;
		 
	}
