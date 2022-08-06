def shipmentVolumePackages(packages):
    packages = sorted(packages,reverse=True)

    return fomula(packages) if len(packages) > 1 else 0

def fomula(packages):
    stack = packages
    result = 0

    cnt = 0
    while (cnt < len(packages)):    
        new_package = stack.pop() + stack.pop()
        result += new_package
        stack.append(new_package)
        stack = sorted(stack,reverse=True)

        cnt += 1

    return result