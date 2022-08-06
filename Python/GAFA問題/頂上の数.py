def numberOfTops(arr):
    ans = 0

    for i in range(1,len(arr)-1):
        if arr[i-1] < arr[i] and arr[i+1] < arr[i]:
            ans += 1
    
    return ans