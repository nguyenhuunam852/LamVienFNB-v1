export function buildFilterMap(
    searchField?: string,
    searchKey?: string
  ): Record<string, string> {
    const fields = searchField?.split(',') || []
    const keys = searchKey?.split(',') || []

    const filterMap: Record<string, string> = {}
    fields.forEach((field, index) => {
      if (field) {
        filterMap[field] = keys[index] || ''
      }
    })

    return filterMap
  }
