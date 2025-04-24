import { ref, Ref } from 'vue';
import { useForm, router } from '@inertiajs/vue3';
import type { FormDataConvertible } from '@inertiajs/core';

export interface CrudForm extends Record<string, FormDataConvertible> {
  page?: number;
  sortField?: string;
  sortDirection?: string;
  searchFields?: string;
  searchKeys?: string;
}

export function useCrudHandlers<TForm extends CrudForm>(
  baseRoute: string,
  initialForm: TForm
) {
  const form = useForm<TForm>({ ...initialForm });

  const selectedId: Ref<number | null> = ref(null);
  const showDeletePopup: Ref<boolean> = ref(false);

  function handleSearch(payload: Partial<TForm>) {
    form.searchFields = Object.keys(payload).join(',')
    form.searchKeys = Object.values(payload).join(',')

    form.get(route(`${baseRoute}`), {
      preserveState: false,
      preserveScroll: false,
      onError: (errors) => console.error('Search errors:', errors),
    });
  }

  function handleSort(field: string, direction: string) {
    form.sortField = field;
    form.sortDirection = direction;

    console.log(form.sortField)
    console.log(form.sortDirection)

    form.get(route(`${baseRoute}`), {
      preserveState: true,
      preserveScroll: true,
      onError: (errors) => console.error('Sort errors:', errors),
    });
  }

  function handlePagi(newPage: number) {
    form.page = newPage

    form.get(route(`${baseRoute}`), {
    preserveState: true,
    preserveScroll: true,
    onError: (errors) => console.error('Form errors:', errors),
  })
  }

  function handleAddPage() {
    router.get(route(`${baseRoute}.create`), {}, {
      preserveState: false,
      onError: (errors) => console.error('Navigation errors:', errors),
    });
  }

  function handleUpdatePage(id: number) {
    router.get(route(`${baseRoute}.edit`, { id }), {}, {
      preserveState: false,
      onError: (errors) => console.error('Navigation errors:', errors),
    });
  }

  function toggleDeletePopup(id: number) {
    selectedId.value = id;
    showDeletePopup.value = true;
  }

  function handleDelete() {
    if (selectedId.value === null) return;

    router.delete(route(`${baseRoute}.delete`, { id: selectedId.value }), {
      preserveState: false,
      onSuccess: () => {
        showDeletePopup.value = false;
        selectedId.value = null;
      },
      onError: (errors) => console.error('Delete errors:', errors),
    });
  }

  return {
    form,
    showDeletePopup,
    handleSearch,
    handlePagi,
    handleSort,
    handleAddPage,
    handleUpdatePage,
    toggleDeletePopup,
    handleDelete
  };
}
