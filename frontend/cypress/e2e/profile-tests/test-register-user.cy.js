describe('Register a Test Developer User', () => {
    it('logs in', () => {
        cy.visit('/register')
        cy.get('select[name="roleId"]')
          .select('Developer')
        cy.get('input[name="email"]') 
          .type('testdev@tcb.com')
        cy.get('input[name="name"]') 
          .type('Test Dev')
        cy.get('input[name="password"]') 
          .type('TestDev1')
        cy.get('input[name="password_confirmation"]') 
          .type('TestDev1')
        cy.get('#register-form').submit() // Submit form
        cy.url().should('contain', '/my-progress') // Should land on /home
    })
})
