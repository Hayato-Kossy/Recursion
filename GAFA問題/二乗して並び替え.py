def sortedSquared(intArr):
    return sorted(sortedSquaredHelper(intArr,0,len(intArr)-1,len(intArr)-1,[]))
def sortedSquaredHelper(intArr,left,right,limit,result):
    if limit < 0:
        return result
    
    if abs(intArr[left]) > abs(intArr[right]):
        result.append(intArr[left]**2)
        left += 1
    else:
        result.append(intArr[right]**2)
        right -= 1
    
    return sortedSquaredHelper(intArr,left,right,limit-1,result)