def maxSubarray(array):
    maxCount = 0
    for i in range(len(array)-1):
        count = 0
        dif = array[i+1] - array[i]
        pre_dif = array[i]
        for j in range(i+1, len(array)):
            pre_dif += dif
            if pre_dif == array[j]:
                count += 1
            else:
                break
        if maxCount < count:
            maxCount = count
    return maxCount + 1
