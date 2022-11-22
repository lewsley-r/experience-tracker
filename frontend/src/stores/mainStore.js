export const useMainStore = defineStore('main', {
    state: () => ({ 
        coreStats: {
            codeArchitecture: [
                {'Functionality': 'Navigate Pattern', 'Status': 1, 'Description': 'Does the developer know how to navigate the pattern in all the Spryker modules?'},
                {'Functionality': 'Build Pattern', 'Status': 2, 'Description': 'Does the developer know how to build the pattern in custom modules?'},
                {'Functionality': 'Overide/ extend Pattern', 'Status': 3, 'Description': 'Does the developer know how to navigate the pattern in all the Spryker modules?'},
                {'Functionality': 'Business Logic Modules', 'Status': 2, 'Description': 'Does the developer know how to navigate the pattern in all the Spryker modules?'},

            ],
            systemArchitecture: {
                'Each Layer': 1,
                'Layer Interaction': 2,
                'Why it works': 3,
                'Value of Architecture Pattern': 4,
                'Build pattern into custom Zed': 1
            },
            serviceArchitecture: {
                'What each service does?': 1,
                'Service interaction': 2,
                'Access Zed (backend gateway)': 3
            }
        }
    }),
    getters: {
        doubleCount: (state) => state.count * 2,
    },
    actions: {
        increment() {
            this.count++
        },
    },
})
