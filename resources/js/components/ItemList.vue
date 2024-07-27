<template>
    <div>
        <div v-for="item in items" :key="item.id" class="item">
            <span>{{ item.name }}</span>
            <button @click="moveItem(item, 'up')">▲</button>
            <button @click="moveItem(item, 'down')">▼</button>
            <button @click="deleteItem(item)">🗑️</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: []
        };
    },
    created() {
        this.fetchItems();
    },
    methods: {
        fetchItems() {
            axios.get('/api/items').then(response => {
                this.items = response.data;
            });
        },
        moveItem(item, direction) {
            let newPosition = item.position + (direction === 'up' ? -1 : 1);
            axios.put(`/api/items/${item.id}/position`, { position: newPosition }).then(() => {
                this.fetchItems();
            });
        },
        deleteItem(item) {
            axios.delete(`/api/items/${item.id}`).then(() => {
                this.fetchItems();
            });
        }
    }
};
</script>
